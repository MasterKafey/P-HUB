<?php

namespace AppBundle\Controller\Admin\Rank;

use AppBundle\Entity\Rank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteRankAction(Rank $rank)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($rank);
        $em->flush();

        return $this->redirectToRoute('app_admin_rank_listing_list_rank');
    }
}