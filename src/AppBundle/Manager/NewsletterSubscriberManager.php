<?php

namespace AppBundle\Manager;


use AppBundle\Entity\NewsletterSubscriber;

class NewsletterSubscriberManager extends AbstractDoctrineManager
{
    /**
     * @return NewsletterSubscriber
     */
    public function getNewsletterSubscriberByEmail($email)
    {
        return $this->getRepository()->findOneByEmail($email);
    }

    /**
     * @return NewsletterSubscriber
     */
    public function create()
    {
        return new NewsletterSubscriber();
    }

    /**
     * @return \AppBundle\Repository\NewsletterSubscriberRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository(NewsletterSubscriber::class);
    }


}