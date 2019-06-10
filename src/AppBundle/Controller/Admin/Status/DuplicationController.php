<?php


namespace AppBundle\Controller\Admin\Status;


use AppBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateStatusAction(Status $status)
    {
        $newStatus = clone $status;
        $newStatus->setName($this->getParameter("cloned_word") . $newStatus->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newStatus);
        $em->flush();

        return $this->redirectToRoute('app_admin_status_edition_edit_status', array(
            'id' => $newStatus->getId()
        ));
    }
}