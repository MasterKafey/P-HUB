<?php

namespace AppBundle\Controller\Admin\God;

use AppBundle\Entity\God;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listGodAction()
    {
        $gods = $this->getDoctrine()->getRepository(God::class)->findAll();

        return $this->render('@Page/Admin/God/Listing/list_god.html.twig', array(
            'gods' => $gods,
        ));
    }
}