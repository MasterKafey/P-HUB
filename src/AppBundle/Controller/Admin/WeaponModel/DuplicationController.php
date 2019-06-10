<?php


namespace AppBundle\Controller\Admin\WeaponModel;


use AppBundle\Entity\WeaponModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DuplicationController extends Controller
{
    public function duplicateWeaponModelAction(WeaponModel $weaponModel)
    {
        $newWeaponModel = clone $weaponModel;
        $newWeaponModel->setName($this->getParameter("cloned_word") . $newWeaponModel->getName());

        $em = $this->getDoctrine()->getManager();
        $em->persist($newWeaponModel);
        $em->flush();

        return $this->redirectToRoute('app_admin_weapon_model_edition_edit_weapon_model', array(
            'id' => $newWeaponModel->getId()
        ));
    }
}