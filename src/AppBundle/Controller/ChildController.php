<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Child;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
}