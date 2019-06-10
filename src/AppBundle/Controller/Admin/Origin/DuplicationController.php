<?php


namespace AppBundle\Controller\Admin\Origin;


use AppBundle\Entity\Origin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateOriginAction(Origin $origin)
    {
        $newOrigin = clone $origin;
        $newOrigin->setName($this->getParameter("cloned_word") . $newOrigin->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newOrigin);
        $em->flush();

        return $this->redirectToRoute('app_admin_origin_edition_edit_origin', array(
            'id' => $newOrigin->getId()
        ));
    }
}