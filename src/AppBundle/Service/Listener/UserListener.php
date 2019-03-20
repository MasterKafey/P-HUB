<?php
namespace AppBundle\Service\Listener;

use AppBundle\Entity\User;
use AppBundle\Service\Business\UserBusiness;
use Doctrine\ORM\Event\LifecycleEventArgs;

class UserListener
{
    private $userBusiness;

    public function __construct(UserBusiness $userBusiness)
    {
        return $this->userBusiness = $userBusiness;
    }

    public function prePersist(User $user, LifecycleEventArgs $args)
    {
        $this->updateUserPassword($user);
    }

    public function preUpdate(User $user, LifecycleEventArgs $args)
    {
        $this->updateUserPassword($user);
    }

    private function updateUserPassword(User $user)
    {
        try {
            $this->userBusiness->hashPassword($user);
        } catch (\Exception $e) {

        }
    }
}