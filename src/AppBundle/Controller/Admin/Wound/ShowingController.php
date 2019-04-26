<?php

namespace AppBundle\Controller\Admin\Wound;

use AppBundle\Entity\Wound;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showWoundAction(Wound $wound)
    {
        return $this->render('@Page/Admin/Wound/Showing/show_wound.html.twig', array(
            'wound' => $wound,
        ));
    }
}