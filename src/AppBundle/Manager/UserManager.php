<?php

namespace AppBundle\Manager;

use AppBundle\Entity\User;

class UserManager extends AbstractDoctrineManager
{
    /**
     * @return User
     */
    public function getAllUsers()
    {
        return $this->getRepository()->getAllUsers();
    }

    public function getRepository()
    {
        return $this->entityManager->getRepository(User::class);
    }
}
