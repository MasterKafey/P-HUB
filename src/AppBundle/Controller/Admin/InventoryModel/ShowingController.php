<?php

namespace AppBundle\Controller\Admin\InventoryModel;

use AppBundle\Entity\InventoryModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showInventoryModelAction(InventoryModel $inventoryModel)
    {
        return $this->render('@Page/Admin/InventoryModel/Showing/show_inventory_model.html.twig', array(
            'inventory_model' => $inventoryModel,
        ));
    }
}