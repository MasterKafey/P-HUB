<?php

namespace AppBundle\Controller\Admin\Wound;

use AppBundle\Entity\Wound;
use AppBundle\Form\Type\Admin\Wound\Creation\CreateWoundType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createWoundAction(Request $request)
    {
        $wound = new Wound();
        $form = $this->createForm(CreateWoundType::class, $wound);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wound);
            $em->flush();
            return $this->redirectToRoute('app_admin_wound_listing_list_wound');
        }

        return $this->render('@Page/Admin/Wound/Creation/create_wound.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}