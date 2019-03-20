<?php

namespace AppBundle\Service\Business;

use AppBundle\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

/**
 * Class UserBusiness
 * @package AppBundle\Service\Business
 */
class UserBusiness
{
    /**
     * @var TokenGeneratorInterface
     */
    protected $tokenGenerator;

    /**
     * @var Registry
     */
    protected $doctrine;

    /**
     * @var TokenStorageInterface
     */
    protected $storage;

    /**
     * @var Session
     */
    protected $session;

    /**
     * @var EncoderFactoryInterface
     */
    protected $encoder;

    public function __construct(TokenGeneratorInterface $tokenGenerator, RegistryInterface $doctrine, TokenStorageInterface $storage, SessionInterface $session, EncoderFactoryInterface $encoder)
    {
        $this->tokenGenerator = $tokenGenerator;
        $this->doctrine = $doctrine;
        $this->storage = $storage;
        $this->session = $session;
        $this->encoder = $encoder;
    }

    /**
     * Generate a new token for a defined User
     *
     * @param User $user : User to change the token from
     * @param bool $persist : Should changes be persisted ?
     *
     * @return string : Generated token
     */
    public function generateToken(User $user, $persist = true)
    {
        $token = $this->tokenGenerator->generateToken();
        $user->setToken($token);
        if ($persist) {
            $em = $this->doctrine->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $token;
    }
    /**
     * Authenticate current user as the defined User
     *
     * @param User $user : User to authenticate as
     */
    public function authenticateUser(User $user)
    {
        $token = new UsernamePasswordToken($user, null, 'secured_area', $user->getRoles());
        $this->storage->setToken($token);
        $this->session->set('_security_secured_area', serialize($token));
    }
    /**
     * Hash a password with hash strategy defined in security
     *
     * @param User $user
     *
     * @return string
     * @throws \Exception
     */
    public function hashPassword(User $user)
    {
        if (null === $user->getPlainPassword()) {
            throw new \Exception('Plain password can\'t be null');
        }
        $encoder = $this->encoder->getEncoder($user);
        $password = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
        $user->setPassword($password);
        return $password;
    }
    /**
     * Get current authenticated user
     *
     * @return User
     */
    public function getCurrentUser()
    {
        $user = $this->storage->getToken()->getUser();
        if ($user instanceof User) {
            return $user;
        }
        return null;
    }
    // -------------------------------------------------- //
    // ---------------------- Tests --------------------- //
    // -------------------------------------------------- //
    /**
     * Check if the password is valid
     *
     * @param User $user : Owner
     * @param string $password : Password to check
     *
     * @return bool
     */
    public function isPasswordValid(User $user, $password)
    {
        $encoder = $this->encoder->getEncoder($user);
        return $encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt());
    }
    /**
     * Is user password defined.
     *
     * @param User $user
     *
     * @return bool
     */
    public function isUserPasswordDefined(User $user)
    {
        return (null !== $user->getPassword());
    }
}