<?php

namespace AppBundle\Controller\Admin\God;

use AppBundle\Entity\God;
use AppBundle\Form\Type\Admin\God\Creation\CreateGodType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createGodAction(Request $request)
    {
        $god = new God();
        $form = $this->createForm(CreateGodType::class, $god);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($god);
            $em->flush();
            return $this->redirectToRoute('app_admin_god_listing_list_god');
        }

        return $this->render('@Page/Admin/God/Creation/create_god.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}