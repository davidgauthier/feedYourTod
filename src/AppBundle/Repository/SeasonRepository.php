<?php

namespace AppBundle\Repository;


/**
 * seasonRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeasonRepository extends \Doctrine\ORM\EntityRepository
{
    public function getSeasonByDate($dateT)
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('DATE_FORMAT', 'DoctrineExtensions\Query\Mysql\DateFormat');

        return $this->createQueryBuilder('s')
            ->select('s')
            ->where("DATE_FORMAT(:dateT, '%m-%d') BETWEEN DATE_FORMAT(s.dateBegin, '%m-%d') AND DATE_FORMAT(s.dateEnd, '%m-%d')")
            ->setParameter('dateT', $dateT)
            ->getQuery()
            ->getOneOrNullResult();

    }
}