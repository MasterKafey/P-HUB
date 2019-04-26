<?php

namespace AppBundle\Controller\Admin\Status;

use AppBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showStatusAction(Status $status)
    {
        return $this->render('@Page/Admin/Status/Showing/show_status.html.twig', array(
            'status' => $status,
        ));
    }
}