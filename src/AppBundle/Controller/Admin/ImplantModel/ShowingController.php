<?php

namespace AppBundle\Controller\Admin\ImplantModel;

use AppBundle\Entity\Implant;
use AppBundle\Entity\ImplantModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showImplantModelAction(ImplantModel $implant)
    {
        return $this->render('@Page/Admin/ImplantModel/Showing/show_implant_model.html.twig', array(
            'implant' => $implant,
        ));
    }
}