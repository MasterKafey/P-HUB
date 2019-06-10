<?php


namespace AppBundle\Controller\Admin\God;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\God;

class DuplicationController extends Controller
{
    public function duplicateGodAction(God $god)
    {
        $newGod = clone $god;
        $newGod->setName($this->getParameter("cloned_word") . $newGod->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newGod);
        $em->flush();

        return $this->redirectToRoute('app_admin_god_edition_edit_god', array(
            'id' => $newGod->getId()
        ));
    }
}