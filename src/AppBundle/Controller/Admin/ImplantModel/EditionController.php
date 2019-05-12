<?php

namespace AppBundle\Controller\Admin\ImplantModel;

use AppBundle\Entity\ImplantModel;
use AppBundle\Form\Type\Admin\ImplantModel\Edition\EditImplantModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editImplantModelAction(Request $request, ImplantModel $implant)
    {
        $form = $this->createForm(EditImplantModelType::class, $implant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($implant);
            $em->flush();

            return $this->redirectToRoute('app_admin_implant_model_listing_list_implant_model');
        }

        return $this->render('@Page/Admin/ImplantModel/Edition/edit_implant_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}