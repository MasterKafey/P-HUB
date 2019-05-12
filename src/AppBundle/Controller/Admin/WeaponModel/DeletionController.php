<?php

namespace AppBundle\Controller\Admin\WeaponModel;

use AppBundle\Entity\Weapon;
use AppBundle\Entity\WeaponModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteWeaponModelAction(WeaponModel $weapon)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($weapon);
        $em->flush();

        return $this->redirectToRoute('app_admin_weapon_model_listing_list_weapon_model');
    }
}