<?php

namespace AppBundle\Controller\Admin\God;

use AppBundle\Entity\God;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showGodAction(God $god)
    {
        return $this->render('@Page/Admin/God/Showing/show_god.html.twig', array(
            'god' => $god,
        ));
    }
}