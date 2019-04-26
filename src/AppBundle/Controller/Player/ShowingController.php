<?php

namespace AppBundle\Controller\Player;

use AppBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showPlayerAction(Player $player)
    {
        return $this->render('@Page/Player/Showing/show_player.html.twig', array(
            'player' => $player,
        ));
    }
}