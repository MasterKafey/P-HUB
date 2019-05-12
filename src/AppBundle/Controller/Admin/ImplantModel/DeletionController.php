<?php

namespace AppBundle\Controller\Admin\ImplantModel;

use AppBundle\Entity\Implant;
use AppBundle\Entity\ImplantModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteImplantModelAction(ImplantModel $implant)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($implant);
        $em->flush();

        return $this->redirectToRoute('app_admin_implant_model_listing_list_implant_model');
    }
}