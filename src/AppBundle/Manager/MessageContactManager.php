<?php

namespace AppBundle\Manager;

use AppBundle\Entity\MessageContact;

class MessageContactManager extends AbstractDoctrineManager
{
    /**
     * @return MessageContact
     */
    public function create()
    {
        return new MessageContact();
    }

    /**
     * @return \AppBundle\Repository\MessageContactRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository(MessageContact::class);
    }
}
