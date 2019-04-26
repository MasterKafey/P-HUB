<?php

namespace AppBundle\Controller\Admin\Weapon;

use AppBundle\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeletionController extends Controller
{
    public function deleteWeaponAction(Weapon $weapon)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($weapon);
        $em->flush();

        return $this->redirectToRoute('app_admin_weapon_listing_list_weapon');
    }
}