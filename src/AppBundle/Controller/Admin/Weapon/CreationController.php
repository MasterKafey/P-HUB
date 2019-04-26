<?php

namespace AppBundle\Controller\Admin\Weapon;

use AppBundle\Entity\Weapon;
use AppBundle\Form\Type\Admin\Weapon\Creation\CreateWeaponType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createWeaponAction(Request $request)
    {
        $weapon = new Weapon();
        $form = $this->createForm(CreateWeaponType::class, $weapon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($weapon);
            $em->flush();
            return $this->redirectToRoute('app_admin_weapon_listing_list_weapon');
        }

        return $this->render('@Page/Admin/Weapon/Creation/create_weapon.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}