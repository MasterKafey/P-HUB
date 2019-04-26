<?php

namespace AppBundle\Controller\Admin\Item;

use AppBundle\Entity\Item;
use AppBundle\Form\Type\Admin\Item\Edition\EditItemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editItemAction(Request $request, Item $item)
    {
        $form = $this->createForm(EditItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();

            return $this->redirectToRoute('app_admin_item_listing_list_item');
        }

        return $this->render('@Page/Admin/Item/Edition/edit_item.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}