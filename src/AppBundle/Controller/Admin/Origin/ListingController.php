<?php

namespace AppBundle\Controller\Admin\Origin;

use AppBundle\Entity\Origin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listOriginAction()
    {
        $origins = $this->getDoctrine()->getRepository(Origin::class)->findAll();

        return $this->render('@Page/Admin/Origin/Listing/list_origin.html.twig', array(
            'origins' => $origins,
        ));
    }
}