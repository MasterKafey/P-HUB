<?php

namespace AppBundle\Controller\Player;

use AppBundle\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listPlayerAction()
    {
        $players = $this->getDoctrine()->getRepository(Player::class)->findAll();

        return $this->render('@Page/Player/Listing/list_player.html.twig', array(
            'players' => $players,
        ));
    }
}