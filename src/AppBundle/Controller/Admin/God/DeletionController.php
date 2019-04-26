<?php

namespace AppBundle\Controller\Admin\God;

use AppBundle\Entity\God;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteGodAction(God $god)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($god);
        $em->flush();

        return $this->redirectToRoute('app_admin_god_listing_list_god');
    }
}