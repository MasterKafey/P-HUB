<?php

namespace AppBundle\Controller\Admin\WeaponModel;

use AppBundle\Entity\WeaponModel;
use AppBundle\Form\Type\Admin\WeaponModel\Creation\CreateWeaponModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createWeaponModelAction(Request $request)
    {
        $weapon = new WeaponModel();
        $form = $this->createForm(CreateWeaponModelType::class, $weapon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($weapon);
            $em->flush();
            return $this->redirectToRoute('app_admin_weapon_model_listing_list_weapon_model');
        }

        return $this->render('@Page/Admin/WeaponModel/Creation/create_weapon_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}