<?php

namespace AppBundle\Controller\Admin\InventoryModel;

use AppBundle\Entity\InventoryModel;
use AppBundle\Form\Type\Admin\InventoryModel\Edition\EditInventoryModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editInventoryModelAction(Request $request, InventoryModel $inventoryModel)
    {
        $form = $this->createForm(EditInventoryModelType::class, $inventoryModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($inventoryModel);
            $em->flush();

            return $this->redirectToRoute('app_admin_inventory_model_listing_list_inventory_model');
        }

        return $this->render('@Page/Admin/InventoryModel/Edition/edit_inventory_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}