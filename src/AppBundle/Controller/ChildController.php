<?php

namespace AppBundle\Controller;

use AppBundle\Form\ChildFoodType;
use AppBundle\Form\ChildType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Child;

class ChildController extends Controller
{
    /**
     * @Route("/children", name="app_children_detail")
     */
    public function getChildAction(){

        $user = $this->getUser();

        $children = $this->getDoctrine()->getRepository(Child::class)->getChild($user);

        return $this->render(':child:children.html.twig', ['children' =>  $children,]);
    }

    /**
     * @Route("/newChild", name="app_new_child")
     */
    public function createChildAction(Request $request){

        $child = $this->container->get('app.child.manager')->create($this->getUser());

        //Créer et enregistrer un nouvel enfant
        $form = $this->createForm(ChildType::class, $child);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $child = $form->getData();

            $this->container->get('app.child.manager')->saveChild($child);

            return $this->redirectToRoute('app_children_detail');
            // render et passer le child
        }

        return $this->render(':child:newChild.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/newChildFood/{id}", name="app_new_childfood")
     */
    public function createChildFoodAction(Request $request, $id){

        $child = $this->getDoctrine()->getRepository(Child::class)->find($id);

        if ($child === null){
            throw $this->createNotFoundException('This child does not exists');
        }

        $childFood = $this->container->get('app.childfood.manager')->create();

        $form = $this->createForm(ChildFoodType::class, $childFood);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $childFood = $form->getData();
            $childFood->setChild($child);

            $this->container->get('app.childfood.manager')->saveChild($childFood);

            return $this->redirectToRoute('app_children_detail');
        }

        return $this->render(':child:newChildFood.html.twig', ['form' => $form->createView()]);
    }

}