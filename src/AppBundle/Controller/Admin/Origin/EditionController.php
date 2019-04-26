<?php

namespace AppBundle\Controller\Admin\Origin;

use AppBundle\Entity\Origin;
use AppBundle\Form\Type\Admin\Origin\Edition\EditOriginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editOriginAction(Request $request, Origin $origin)
    {
        $form = $this->createForm(EditOriginType::class, $origin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($origin);
            $em->flush();

            return $this->redirectToRoute('app_admin_origin_listing_list_origin');
        }

        return $this->render('@Page/Admin/Origin/Edition/edit_origin.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}