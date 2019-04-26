<?php

namespace AppBundle\Controller\Admin\Origin;

use AppBundle\Entity\Origin;
use AppBundle\Form\Type\Admin\Origin\Creation\CreateOriginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createOriginAction(Request $request)
    {
        $origin = new Origin();
        $form = $this->createForm(CreateOriginType::class, $origin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($origin);
            $em->flush();
            return $this->redirectToRoute('app_admin_origin_listing_list_origin');
        }

        return $this->render('@Page/Admin/Origin/Creation/create_origin.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}