<?php

namespace AppBundle\Controller\Admin\Origin;

use AppBundle\Entity\Origin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showOriginAction(Origin $origin)
    {
        return $this->render('@Page/Admin/Origin/Showing/show_origin.html.twig', array(
            'origin' => $origin,
        ));
    }
}