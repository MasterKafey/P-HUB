<?php

namespace AppBundle\Controller\Admin\PersonageModel;

use AppBundle\Entity\PersonageModel;
use AppBundle\Form\Type\Admin\PersonageModel\Creation\CreatePersonageModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createPersonageModelAction(Request $request)
    {
        $personageModel = new PersonageModel();
        $form = $this->createForm(CreatePersonageModelType::class, $personageModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personageModel);
            $em->flush();
            return $this->redirectToRoute('app_admin_personage_model_listing_list_personage_model');
        }

        return $this->render('@Page/Admin/PersonageModel/Creation/create_personage_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}