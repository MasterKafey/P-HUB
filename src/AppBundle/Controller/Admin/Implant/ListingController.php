<?php

namespace AppBundle\Controller\Admin\Implant;

use AppBundle\Entity\Implant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listImplantAction()
    {
        $implants = $this->getDoctrine()->getRepository(Implant::class)->findAll();

        return $this->render('@Page/Admin/Implant/Listing/list_implant.html.twig', array(
            'implants' => $implants,
        ));
    }
}