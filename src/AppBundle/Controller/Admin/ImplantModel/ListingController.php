<?php

namespace AppBundle\Controller\Admin\ImplantModel;

use AppBundle\Entity\Implant;
use AppBundle\Entity\ImplantModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listImplantModelAction()
    {
        $implants = $this->getDoctrine()->getRepository(ImplantModel::class)->findAll();

        return $this->render('@Page/Admin/ImplantModel/Listing/list_implant_model.html.twig', array(
            'implants' => $implants,
        ));
    }
}