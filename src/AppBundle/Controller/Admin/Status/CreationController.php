<?php

namespace AppBundle\Controller\Admin\Status;

use AppBundle\Entity\Status;
use AppBundle\Form\Type\Admin\Status\Creation\CreateStatusType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function createStatusAction(Request $request)
    {
        $status = new Status();
        $form = $this->createForm(CreateStatusType::class, $status);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($status);
            $em->flush();
            return $this->redirectToRoute('app_admin_status_listing_list_status');
        }

        return $this->render('@Page/Admin/Status/Creation/create_status.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}