<?php

namespace AppBundle\Repository;


class UserRepository extends \Doctrine\ORM\EntityRepository
{
     public function getAllUsers(){

         $u = $this->createQueryBuilder('u')
             ->select('u')
             ->orderBy('u.username')
             ->getQuery()
             ->getResult();

         return $u;
     }
}