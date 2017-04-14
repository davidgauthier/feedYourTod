<?php

namespace AppBundle\Manager;


use AppBundle\Entity\ChildFood;
use Doctrine\ORM\EntityManagerInterface;

class ChildFoodManager
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create()
    {
        $child = new ChildFood();

        return $child;
    }

    public function saveChild($childFood){

        $em = $this->entityManager;
        $em->persist($childFood);
        $em->flush();

    }

}