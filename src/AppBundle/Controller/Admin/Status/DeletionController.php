<?php

namespace AppBundle\Controller\Admin\Status;

use AppBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteStatusAction(Status $status)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($status);
        $em->flush();

        return $this->redirectToRoute('app_admin_status_listing_list_status');
    }
}