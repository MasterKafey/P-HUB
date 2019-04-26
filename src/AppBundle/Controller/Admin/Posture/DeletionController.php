<?php

namespace AppBundle\Controller\Admin\Posture;

use AppBundle\Entity\Posture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deletePostureAction(Posture $posture)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($posture);
        $em->flush();

        return $this->redirectToRoute('app_admin_posture_listing_list_posture');
    }
}