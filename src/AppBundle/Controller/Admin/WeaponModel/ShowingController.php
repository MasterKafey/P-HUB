<?php

namespace AppBundle\Controller\Admin\WeaponModel;

use AppBundle\Entity\Weapon;
use AppBundle\Entity\WeaponModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function showWeaponModelAction(WeaponModel $weapon)
    {
        return $this->render('@Page/Admin/WeaponModel/Showing/show_weapon_model.html.twig', array(
            'weapon' => $weapon,
        ));
    }
}