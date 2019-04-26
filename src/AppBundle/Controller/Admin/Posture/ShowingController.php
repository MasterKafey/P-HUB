<?php

namespace AppBundle\Controller\Admin\Posture;

use AppBundle\Entity\Posture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showPostureAction(Posture $posture)
    {
        return $this->render('@Page/Admin/Posture/Showing/show_posture.html.twig', array(
            'posture' => $posture,
        ));
    }
}