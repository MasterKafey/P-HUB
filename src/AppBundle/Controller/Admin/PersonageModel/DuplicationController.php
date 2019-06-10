<?php


namespace AppBundle\Controller\Admin\PersonageModel;


use AppBundle\Entity\PersonageModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicatePlayerModelAction(PersonageModel $personageModel)
    {
        $newPersonageModel = clone $personageModel;
        $newPersonageModel->setPseudo($this->getParameter("cloned_word") . $personageModel->getPseudo());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newPersonageModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_personage_model_edition_edit_personage_model', array(
            'id' => $newPersonageModel->getId()
        ));
    }
}