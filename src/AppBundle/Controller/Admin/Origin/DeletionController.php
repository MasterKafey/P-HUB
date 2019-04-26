<?php

namespace AppBundle\Controller\Admin\Origin;

use AppBundle\Entity\Origin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteOriginAction(Origin $origin)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($origin);
        $em->flush();

        return $this->redirectToRoute('app_admin_origin_listing_list_origin');
    }
}