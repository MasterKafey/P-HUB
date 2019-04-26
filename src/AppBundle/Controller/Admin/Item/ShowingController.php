<?php

namespace AppBundle\Controller\Admin\Item;

use AppBundle\Entity\Item;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showItemAction(Item $item)
    {
        return $this->render('@Page/Admin/Item/Showing/show_item.html.twig', array(
            'item' => $item,
        ));
    }
}