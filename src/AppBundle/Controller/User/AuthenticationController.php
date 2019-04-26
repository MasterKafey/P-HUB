<?php

namespace AppBundle\Controller\User;

use AppBundle\Form\Type\User\Authentication\AuthenticateType;
use AppBundle\Service\Business\PlayerBusiness;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthenticationController extends Controller
{
    public function authenticateAction(AuthenticationUtils $utils, PlayerBusiness $business)
    {

        $form = $this->createForm(AuthenticateType::class);
        $lastUsername = $utils->getLastUsername();
        $form->get('_username')->setData($lastUsername);
        $form->get('_csrf_token')->setData(
            $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
        );

        return $this->render('@Page/User/Authentication/authenticate.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function logoutAction()
    {
        throw new \RuntimeException('Should never be called');
    }

    public function checkAction()
    {
        throw new \RuntimeException('Should never be called');
    }
}
