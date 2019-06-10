<?php

namespace AppBundle\Controller\Admin\InventoryModel;

use AppBundle\Entity\InventoryModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listInventoryModelAction()
    {
        $inventoryModels = $this->getDoctrine()->getRepository(InventoryModel::class)->findAll();

        return $this->render('@Page/Admin/InventoryModel/Listing/list_inventory_model.html.twig', array(
            'inventory_models' => $inventoryModels,
        ));
    }
}