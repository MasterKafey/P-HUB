<?php

namespace AppBundle\Controller\Admin\Posture;

use AppBundle\Entity\Posture;
use AppBundle\Form\Type\Admin\Posture\Edition\EditPostureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editPostureAction(Request $request, Posture $posture)
    {
        $form = $this->createForm(EditPostureType::class, $posture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($posture);
            $em->flush();

            return $this->redirectToRoute('app_admin_posture_listing_list_posture');
        }

        return $this->render('@Page/Admin/Posture/Edition/edit_posture.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}