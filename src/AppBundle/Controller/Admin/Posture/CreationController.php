<?php

namespace AppBundle\Controller\Admin\Posture;

use AppBundle\Entity\Posture;
use AppBundle\Form\Type\Admin\Posture\Creation\CreatePostureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createPostureAction(Request $request)
    {
        $posture = new Posture();
        $form = $this->createForm(CreatePostureType::class, $posture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($posture);
            $em->flush();
            return $this->redirectToRoute('app_admin_posture_listing_list_posture');
        }

        return $this->render('@Page/Admin/Posture/Creation/create_posture.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}