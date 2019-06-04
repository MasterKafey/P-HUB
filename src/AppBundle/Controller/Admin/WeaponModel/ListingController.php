<?php

namespace AppBundle\Controller\Admin\WeaponModel;

use AppBundle\Entity\WeaponModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listWeaponModelAction()
    {
        $weaponModels = $this->getDoctrine()->getRepository(WeaponModel::class)->findAll();

        return $this->render('@Page/Admin/WeaponModel/Listing/list_weapon_model.html.twig', array(
            'weapon_models' => $weaponModels,
        ));
    }
}