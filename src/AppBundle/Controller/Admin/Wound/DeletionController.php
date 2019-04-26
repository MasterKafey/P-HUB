<?php

namespace AppBundle\Controller\Admin\Wound;

use AppBundle\Entity\Wound;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteWoundAction(Wound $wound)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($wound);
        $em->flush();

        return $this->redirectToRoute('app_admin_wound_listing_list_wound');
    }
}