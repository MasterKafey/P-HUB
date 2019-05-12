<?php

namespace AppBundle\Controller\Admin\ImplantModel;

use AppBundle\Entity\ImplantModel;
use AppBundle\Form\Type\Admin\ImplantModel\Creation\CreateImplantModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createImplantModelAction(Request $request)
    {
        $implant = new ImplantModel();
        $form = $this->createForm(CreateImplantModelType::class, $implant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($implant);
            $em->flush();
            return $this->redirectToRoute('app_admin_implant_model_listing_list_implant_model');
        }

        return $this->render('@Page/Admin/ImplantModel/Creation/create_implant_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}