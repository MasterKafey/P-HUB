<?php

namespace AppBundle\Controller\Admin\Weapon;

use AppBundle\Entity\Weapon;
use AppBundle\Form\Type\Admin\Weapon\Edition\EditWeaponType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editWeaponAction(Request $request, Weapon $weapon)
    {
        $form = $this->createForm(EditWeaponType::class, $weapon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($weapon);
            $em->flush();

            return $this->redirectToRoute('app_admin_weapon_listing_list_weapon');
        }

        return $this->render('@Page/Admin/Weapon/Edition/edit_weapon.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}