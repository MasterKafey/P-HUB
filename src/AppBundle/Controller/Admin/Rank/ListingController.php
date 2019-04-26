<?php

namespace AppBundle\Controller\Admin\Rank;

use AppBundle\Entity\Rank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listRankAction()
    {
        $ranks = $this->getDoctrine()->getRepository(Rank::class)->findAll();

        return $this->render('@Page/Admin/Rank/Listing/list_rank.html.twig', array(
            'ranks' => $ranks,
        ));
    }
}