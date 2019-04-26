<?php

namespace AppBundle\Controller\Admin\Weapon;

use AppBundle\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listWeaponAction()
    {
        $weapons = $this->getDoctrine()->getRepository(Weapon::class)->findAll();

        return $this->render('@Page/Admin/Weapon/Listing/list_weapon.html.twig', array(
            'weapons' => $weapons,
        ));
    }
}