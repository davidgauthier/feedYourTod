<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 18/04/2017
 * Time: 12:58
 */

namespace AppBundle\Manager;


use AppBundle\Entity\Season;

class SeasonManager extends AbstractDoctrineManager
{

    public function getCurrentSeason($dateTime)
    {
        $date = $dateTime;
        return $this->getRepository()->getSeasonByDate($date);
    }


    public function getRepository()
    {
        return $this->entityManager->getRepository(Season::class);
    }

}