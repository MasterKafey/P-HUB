<?php

namespace AppBundle\Controller\Admin\PersonageModel;

use AppBundle\Entity\PersonageModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listPersonageModelAction()
    {
        $personageModels = $this->getDoctrine()->getRepository(PersonageModel::class)->findAll();

        return $this->render('@Page/Admin/PersonageModel/Listing/list_personage_model.html.twig', array(
            'personage_models' => $personageModels,
        ));
    }
}