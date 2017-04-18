<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Child;
use AppBundle\Entity\User;

class ChildManager extends AbstractDoctrineManager
{
    /**
     * @return Child
     */
    public function getChildById($id)
    {
        return $this->getRepository()->findOneById($id);
    }


    /**
     * @param User $user
     * @return Child
     */
    public function create(User $user)
    {
        $child = new Child();
        $child->setUser($user);

        return $child;
    }


    /**
     * @return \AppBundle\Repository\RecipeRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository(Child::class);
    }

}