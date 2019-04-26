<?php

namespace AppBundle\Controller\Admin\Wound;

use AppBundle\Entity\Wound;
use AppBundle\Form\Type\Admin\Wound\Edition\EditWoundType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editWoundAction(Request $request, Wound $wound)
    {
        $form = $this->createForm(EditWoundType::class, $wound);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($wound);
            $em->flush();

            return $this->redirectToRoute('app_admin_wound_listing_list_wound');
        }

        return $this->render('@Page/Admin/Wound/Edition/edit_wound.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}