<?php

namespace AppBundle\Controller\Admin\ItemModel;

use AppBundle\Entity\Item;
use AppBundle\Entity\ItemModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showItemModelAction(ItemModel $item)
    {
        return $this->render('@Page/Admin/ItemModel/Showing/show_item_model.html.twig', array(
            'item' => $item,
        ));
    }
}