<?php

namespace AppBundle\Controller\Admin\PersonageModel;

use AppBundle\Entity\PersonageModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showPersonageModelAction(PersonageModel $personageModel)
    {
        return $this->render('@Page/Admin/PersonageModel/Showing/show_personage_model.html.twig', array(
            'personage_model' => $personageModel,
        ));
    }
}