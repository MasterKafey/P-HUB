<?php

namespace AppBundle\Controller\Admin\Rank;

use AppBundle\Entity\Rank;
use AppBundle\Form\Type\Admin\Rank\Edition\EditRankType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editRankAction(Request $request, Rank $rank)
    {
        $form = $this->createForm(EditRankType::class, $rank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($rank);
            $em->flush();

            return $this->redirectToRoute('app_admin_rank_listing_list_rank');
        }

        return $this->render('@Page/Admin/Rank/Edition/edit_rank.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}