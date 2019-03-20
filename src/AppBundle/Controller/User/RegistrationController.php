<?php

namespace AppBundle\Controller\User;


use AppBundle\Entity\User;
use AppBundle\Form\Type\User\Registration\RegisterUserType;
use AppBundle\Service\Business\UserBusiness;
use AppBundle\Service\Mailer\User\RegistrationMailer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    public function registerAction(Request $request, UserBusiness $userBusiness, RegistrationMailer $mailer)
    {
        $user = new User();

        $form = $this->createForm(RegisterUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userBusiness->generateToken($user, false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $mailer->sendRegisterMail($user);

            return $this->redirectToRoute('app_user_authentication_authenticate');
        }

        return $this->render('@Page/User/Registration/registration.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
