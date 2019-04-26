<?php

namespace AppBundle\Controller\Admin\Wound;

use AppBundle\Entity\Wound;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listWoundAction()
    {
        $wounds = $this->getDoctrine()->getRepository(Wound::class)->findAll();

        return $this->render('@Page/Admin/Wound/Listing/list_wound.html.twig', array(
            'wounds' => $wounds,
        ));
    }
}