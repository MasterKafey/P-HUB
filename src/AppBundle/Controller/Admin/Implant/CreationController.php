<?php

namespace AppBundle\Controller\Admin\Implant;

use AppBundle\Entity\Implant;
use AppBundle\Form\Type\Admin\Implant\Creation\CreateImplantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createImplantAction(Request $request)
    {
        $implant = new Implant();
        $form = $this->createForm(CreateImplantType::class, $implant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($implant);
            $em->flush();
            return $this->redirectToRoute('app_admin_implant_listing_list_implant');
        }

        return $this->render('@Page/Admin/Implant/Creation/create_implant.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}