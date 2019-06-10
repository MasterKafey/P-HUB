<?php


namespace AppBundle\Controller\Admin\Wound;


use AppBundle\Entity\Wound;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateWoundAction(Wound $wound)
    {
        $newWound = clone $wound;
        $newWound->setName($this->getParameter("cloned_word") . $newWound->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newWound);
        $em->flush();

        return $this->redirectToRoute('app_admin_wound_edition_edit_wound', array(
            'id' => $newWound->getId()
        ));
    }
}