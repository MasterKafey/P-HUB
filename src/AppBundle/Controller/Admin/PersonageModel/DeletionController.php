<?php

namespace AppBundle\Controller\Admin\PersonageModel;

use AppBundle\Entity\PersonageModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deletePersonageModelAction(PersonageModel $personageModel)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($personageModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_personage_model_listing_list_personage_model');
    }
}