<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Season;
use Doctrine\ORM\QueryBuilder;


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
        return $this->createQueryBuilder('r')
            ->select('r')
            ->andWhere('r.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function getRandomRecipes($limit = 5, Season $season = null){

        $qb = $this->createQueryBuilder('r')
            ->addSelect('RAND() as HIDDEN rand')
            ->addOrderBy('rand');

        if(null !== $season){
            $qb->leftJoin('r.season','s')
                ->where('s.id = :idSeason')
                ->setParameter(':idSeason', $season->getId());
        }

        $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }


    public function getRandomRecipe($count = 1){
        return $this->createQueryBuilder('r')
            ->addSelect('RAND() as HIDDEN rand')
            ->addOrderBy('rand')
            ->setMaxResults($count)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function getSearchRecipe($search){
        $qb = $this->createQueryBuilder('r')
            ->select('r')
            ->where("r.name LIKE :searchWord")
            ->setParameter(':searchWord', '%'.$search->getKeyword().'%');

        if(null != $search->getAge()){
            $this->whereAgeIsDefined($qb, $search->getAge());
        }

           return $qb
            ->getQuery()
            ->getResult();
    }

    public function whereAgeIsDefined(QueryBuilder $qb, $age)
    {
        $qb
            ->andWhere('r.age <= :age')
            ->setParameter(':age', $age);

    }
}
