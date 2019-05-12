<?php

namespace AppBundle\Controller\Admin\ItemModel;

use AppBundle\Entity\ItemModel;
use AppBundle\Form\Type\Admin\ItemModel\Creation\CreateItemModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createItemModelAction(Request $request)
    {
        $item = new ItemModel();
        $form = $this->createForm(CreateItemModelType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            return $this->redirectToRoute('app_admin_item_model_listing_list_item_model');
        }

        return $this->render('@Page/Admin/ItemModel/Creation/create_item_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}