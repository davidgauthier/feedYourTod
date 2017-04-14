<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Child;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class ChildManager
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create(User $user)
    {
        $child = new Child();
        $child->setUser($user);

        return $child;
    }

    public function saveChild($child){

        $em = $this->entityManager;
        $em->persist($child);
        $em->flush();

    }

}