<?php

namespace AppBundle\Controller\Admin\Rank;

use AppBundle\Entity\Rank;
use AppBundle\Form\Type\Admin\Rank\Creation\CreateRankType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createRankAction(Request $request)
    {
        $rank = new Rank();
        $form = $this->createForm(CreateRankType::class, $rank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rank);
            $em->flush();
            return $this->redirectToRoute('app_admin_rank_listing_list_rank');
        }

        return $this->render('@Page/Admin/Rank/Creation/create_rank.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}