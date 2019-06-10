<?php

namespace AppBundle\Controller\Admin\InventoryModel;

use AppBundle\Entity\InventoryModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteInventoryModelAction(InventoryModel $inventoryModel)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($inventoryModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_inventory_model_listing_list_inventory_model');
    }
}