<?php

namespace AppBundle\Controller\Admin\Implant;

use AppBundle\Entity\Implant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showImplantAction(Implant $implant)
    {
        return $this->render('@Page/Admin/Implant/Showing/show_implant.html.twig', array(
            'implant' => $implant,
        ));
    }
}