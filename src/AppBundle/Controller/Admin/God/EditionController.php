<?php

namespace AppBundle\Controller\Admin\God;

use AppBundle\Entity\God;
use AppBundle\Form\Type\Admin\God\Edition\EditGodType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditionController extends Controller
{
    public function editGodAction(Request $request, God $god)
    {
        $form = $this->createForm(EditGodType::class, $god);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            if ($form->get('image')->get('delete_file')->getData() && $god->getImage()) {
                $em->remove($god->getImage());
                $god->setImage(null);
            }
            $em->persist($god);
            $em->flush();

            return $this->redirectToRoute('app_admin_god_listing_list_god');
        }

        return $this->render('@Page/Admin/God/Edition/edit_god.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}