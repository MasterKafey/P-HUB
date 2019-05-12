<?php

namespace AppBundle\Controller\Admin\ItemModel;

use AppBundle\Entity\Item;
use AppBundle\Entity\ItemModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteItemModelAction(ItemModel $item)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();

        return $this->redirectToRoute('app_admin_item_model_listing_list_item_model');
    }
}