<?php


namespace AppBundle\Controller\Admin\Rank;


use AppBundle\Entity\Rank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateRankAction(Rank $rank)
    {
        $newRank = clone $rank;
        $newRank->setName($this->getParameter("cloned_word") . $newRank->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newRank);
        $em->flush();

        return $this->redirectToRoute('app_admin_rank_edition_edit_rank', array(
            'id' => $newRank->getId()
        ));
    }
}