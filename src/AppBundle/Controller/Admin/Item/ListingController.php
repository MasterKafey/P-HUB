<?php

namespace AppBundle\Controller\Admin\Item;

use AppBundle\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listItemAction()
    {
        $items = $this->getDoctrine()->getRepository(Item::class)->findAll();

        return $this->render('@Page/Admin/Item/Listing/list_item.html.twig', array(
            'items' => $items,
        ));
    }
}