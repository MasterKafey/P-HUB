<?php

namespace AppBundle\Controller\Admin\Posture;

use AppBundle\Entity\Posture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listPostureAction()
    {
        $postures = $this->getDoctrine()->getRepository(Posture::class)->findAll();

        return $this->render('@Page/Admin/Posture/Listing/list_posture.html.twig', array(
            'postures' => $postures,
        ));
    }
}