<?php

namespace AppBundle\Repository;

/**
 * RecipeRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecipeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getRecipe($id)
    {
        return $this->createQueryBuilder('i')
            ->select('i')
            ->andWhere('i.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
