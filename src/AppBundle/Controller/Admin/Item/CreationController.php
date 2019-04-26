<?php

namespace AppBundle\Controller\Admin\Item;

use AppBundle\Entity\Item;
use AppBundle\Form\Type\Admin\Item\Creation\CreateItemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createItemAction(Request $request)
    {
        $item = new Item();
        $form = $this->createForm(CreateItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            return $this->redirectToRoute('app_admin_item_listing_list_item');
        }

        return $this->render('@Page/Admin/Item/Creation/create_item.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}