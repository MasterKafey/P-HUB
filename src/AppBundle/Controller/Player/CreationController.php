<?php

namespace AppBundle\Controller\Player;

use AppBundle\Entity\Player;
use AppBundle\Form\Type\Player\Creation\CreatePlayerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createPlayerAction(Request $request)
    {
        $player = new Player();
        $form = $this->createForm(CreatePlayerType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();
            return $this->redirectToRoute('app_player_listing_list_player');
        }

        return $this->render('@Page/Player/Creation/create_player.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}