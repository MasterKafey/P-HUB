<?php

namespace AppBundle\Controller\Admin\InventoryModel;

use AppBundle\Entity\InventoryModel;
use AppBundle\Form\Type\Admin\InventoryModel\Creation\CreateInventoryModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createInventoryModelAction(Request $request)
    {
        $inventoryModel = new InventoryModel();
        $form = $this->createForm(CreateInventoryModelType::class, $inventoryModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inventoryModel);
            $em->flush();
            return $this->redirectToRoute('app_admin_inventory_model_listing_list_inventory_model');
        }

        return $this->render('@Page/Admin/InventoryModel/Creation/create_inventory_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}