<?php

namespace AppBundle\Controller\Player;

use AppBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deletePlayerAction(Player $player)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($player);
        $em->flush();

        return $this->redirectToRoute('app_player_listing_list_player');
    }
}