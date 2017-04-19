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
     * @Route("/children", name="app_children")
     */
    public function childrenAction(){

        $user = $this->getUser();

        $children = $this->getDoctrine()->getRepository(Child::class)->getChild($user);

        return $this->render(':child:children.html.twig', [
            'children' => $children,
        ]);
    }




    /**
     * @Route("/child/new", name="app_child_new")
     */
    public function newAction(Request $request)
    {

        $child = $this->container->get('app.child_manager')->create($this->getUser());

        //Créer et enregistrer un nouvel enfant
        $form = $this->createForm(ChildType::class, $child);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $child = $form->getData();
//            dump($child);exit();

            $this->container->get('app.child_manager')->save($child);

            return $this->redirectToRoute('app_children');
            // render et passer le child
        }

        return $this->render(':child:new.html.twig', ['form' => $form->createView()]);
    }



    /**
     * @Route("/child/edit/{id}", name="app_child_edit")
     */
    public function editAction(Request $request, $id)
    {

        $child = $this->container->get('app.child_manager')->getChildById($id);

        if($child == null)
        {
            throw new NotFoundHttpException("L'enfant recherché n'existe pas.");
        }

        $form = $this->createForm(ChildType::class, $child);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $child = $form->getData();

            $this->container->get('app.child_manager')->save($child);

            return $this->redirectToRoute('app_children');
        }

        return $this->render(':child:edit.html.twig', [
            'form' => $form->createView(),
            'child' => $child,
        ]);
    }



    /**
     * @Route("/child/{id}", name="app_child")
     */
    public function childAction($id)
    {

        $user = $this->getUser();

        $childManager = $this->container->get("app.child_manager");
        $child = $childManager->getChildById($id);

        if($child == null)
        {
            throw $this->createNotFoundException("Le child recherché n'existe pas.");
        }

        if($child->getUser() !== $user){
            throw $this->createAccessDeniedException('Le child recherché n\'est pas le votre.');
        }

        return $this->render(':child:child.html.twig',[
            'child' => $child,
        ]);
    }







}