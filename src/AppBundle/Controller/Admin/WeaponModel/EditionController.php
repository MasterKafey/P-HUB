<?php

namespace AppBundle\Controller\Admin\WeaponModel;

use AppBundle\Entity\WeaponModel;
use AppBundle\Form\Type\Admin\WeaponModel\Edition\EditWeaponModelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editWeaponModelAction(Request $request, WeaponModel $weapon)
    {
        $form = $this->createForm(EditWeaponModelType::class, $weapon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($weapon);
            $em->flush();

            return $this->redirectToRoute('app_admin_weapon_model_listing_list_weapon_model');
        }

        return $this->render('@Page/Admin/WeaponModel/Edition/edit_weapon_model.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}