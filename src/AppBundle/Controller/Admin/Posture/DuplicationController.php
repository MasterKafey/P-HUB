<?php


namespace AppBundle\Controller\Admin\Posture;


use AppBundle\Entity\Posture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicatePostureAction(Posture $posture)
    {
        $newPosture = clone $posture;
        $newPosture->setName($this->getParameter("cloned_word") . $newPosture->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newPosture);
        $em->flush();

        return $this->redirectToRoute('app_admin_posture_edition_edit_posture', array(
            'id' => $newPosture->getId()
        ));
    }
}