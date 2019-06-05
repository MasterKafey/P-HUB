<?php


namespace AppBundle\Controller\Admin\ImplantModel;


use AppBundle\Entity\ImplantModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateImplantModelAction(ImplantModel $implantModel)
    {
        $newImplantModel = clone $implantModel;
        $newImplantModel->setName($this->getParameter("cloned_word") . $newImplantModel->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newImplantModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_implant_model_edition_edit_implant_model', array(
            'id' => $newImplantModel->getId()
        ));
    }
}