<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Child;
use AppBundle\Form\ChildFoodType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChildFoodController extends Controller
{

    /**
     * @Route("/childfood/{idChild}/new", name="app_childfood_new")
     */
    public function newAction(Request $request, $idChild){

        $child = $this->getDoctrine()->getRepository(Child::class)->find($idChild);

        if ($child === null){
            throw $this->createNotFoundException('This child does not exists');
        }

        $childFood = $this->container->get('app.childfood_manager')->create();

        $form = $this->createForm(ChildFoodType::class, $childFood);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $childFood = $form->getData();
            $childFood->setChild($child);

            $this->container->get('app.childfood_manager')->saveChild($childFood);

            return $this->redirectToRoute('app_children');
        }

        return $this->render(':child:newChildFood.html.twig', ['form' => $form->createView()]);
    }

}