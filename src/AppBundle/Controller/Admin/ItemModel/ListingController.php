<?php

namespace AppBundle\Controller\Admin\ItemModel;

use AppBundle\Entity\Item;
use AppBundle\Entity\ItemModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listItemModelAction()
    {
        $items = $this->getDoctrine()->getRepository(ItemModel::class)->findAll();

        return $this->render('@Page/Admin/ItemModel/Listing/list_item_model.html.twig', array(
            'items' => $items,
        ));
    }
}