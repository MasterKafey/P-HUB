<?php

namespace AppBundle\Controller\Admin\Status;

use AppBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listStatusAction()
    {
        $statuss = $this->getDoctrine()->getRepository(Status::class)->findAll();

        return $this->render('@Page/Admin/Status/Listing/list_status.html.twig', array(
            'statuss' => $statuss,
        ));
    }
}