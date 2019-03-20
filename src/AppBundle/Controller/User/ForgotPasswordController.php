<?php

namespace AppBundle\Controller\User;

use AppBundle\Entity\User;
use AppBundle\Form\Type\User\ForgotPassword\ForgotPasswordType;
use AppBundle\Form\Type\User\ForgotPassword\ResetPasswordType;
use AppBundle\Service\Business\UserBusiness;
use AppBundle\Service\Mailer\User\ForgotPasswordMailer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class ForgotPasswordController extends Controller
{
    public function requestTokenAction(Request $request, TokenGeneratorInterface $tokenGenerator, ForgotPasswordMailer $mailer)
    {
        $user = new User();

        $form = $this->createForm(ForgotPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $targetUser = $this->getDoctrine()->getRepository(User::class)->findOneBy(array('email' => $user->getEmail()));

            if ($targetUser) {
                $passwordToken = $tokenGenerator->generateToken();
                $targetUser->setPasswordToken($passwordToken);
                $em = $this->getDoctrine()->getManager();
                $em->persist($targetUser);
                $em->flush();
                $mailer->sendForgotPasswordMail($targetUser);
            }
        }

        return $this->render('@Page/User/ForgotPassword/request.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }

    public function checkTokenAction(Request $request, UserBusiness $userBusiness, User $user, $token)
    {
        if ($token !== $user->getPasswordToken()) {
            return $this->redirectToRoute('app_home_home_index');
        }

        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userBusiness->hashPassword($user);
            $user->setPasswordToken(null);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_authentication_authenticate');
        }

        return $this->render('@Page/User/ForgotPassword/forgot_password.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
