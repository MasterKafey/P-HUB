<?php

namespace AppBundle\Controller\Player;

use AppBundle\Entity\Player;
use AppBundle\Form\Type\Player\Edition\EditPlayerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editPlayerAction(Request $request, Player $player)
    {
        $form = $this->createForm(EditPlayerType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();

            return $this->redirectToRoute('app_player_listing_list_player');
        }

        return $this->render('@Page/Player/Edition/edit_player.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}