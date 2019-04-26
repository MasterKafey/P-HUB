<?php

namespace AppBundle\Controller\Admin\Weapon;

use AppBundle\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showWeaponAction(Weapon $weapon)
    {
        return $this->render('@Page/Admin/Weapon/Showing/show_weapon.html.twig', array(
            'weapon' => $weapon,
        ));
    }
}