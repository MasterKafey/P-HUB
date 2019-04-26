<?php

namespace AppBundle\Controller\Admin\Rank;

use AppBundle\Entity\Rank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showRankAction(Rank $rank)
    {
        return $this->render('@Page/Admin/Rank/Showing/show_rank.html.twig', array(
            'rank' => $rank,
        ));
    }
}