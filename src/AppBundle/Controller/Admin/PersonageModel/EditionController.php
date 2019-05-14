<?php

namespace AppBundle\Controller\Admin\PersonageModel;

use AppBundle\Entity\PersonageModel;
use AppBundle\Form\Type\Admin\PersonageModel\Edition\EditPersonageModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editPersonageModelAction(Request $request, PersonageModel $personageModel)
    {
        $form = $this->createForm(EditPersonageModelType::class, $personageModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($personageModel);
            $em->flush();

            return $this->redirectToRoute('app_admin_personage_model_listing_list_personage_model');
        }

        return $this->render('@Page/Admin/PersonageModel/Edition/edit_personage_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}