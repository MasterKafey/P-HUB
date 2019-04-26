<?php

namespace AppBundle\Controller\Admin\Implant;

use AppBundle\Entity\Implant;
use AppBundle\Form\Type\Admin\Implant\Edition\EditImplantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editImplantAction(Request $request, Implant $implant)
    {
        $form = $this->createForm(EditImplantType::class, $implant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($implant);
            $em->flush();

            return $this->redirectToRoute('app_admin_implant_listing_list_implant');
        }

        return $this->render('@Page/Admin/Implant/Edition/edit_implant.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}