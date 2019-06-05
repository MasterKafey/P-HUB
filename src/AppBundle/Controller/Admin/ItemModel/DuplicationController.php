<?php


namespace AppBundle\Controller\Admin\ItemModel;


use AppBundle\Entity\ItemModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateItemModelAction(ItemModel $itemModel)
    {
        $newItemModel = clone $itemModel;
        $newItemModel->setName($this->getParameter("cloned_word"). " " . $newItemModel->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newItemModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_item_model_edition_edit_item_model', array(
            'id' => $newItemModel->getId()
        ));
    }
}