<?php

namespace AppBundle\Controller\Admin\Implant;

use AppBundle\Entity\Implant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteImplantAction(Implant $implant)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($implant);
        $em->flush();

        return $this->redirectToRoute('app_admin_implant_listing_list_implant');
    }
}