<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 12/04/2017
 * Time: 12:12
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Child;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadChildData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $childsData = array(
            array(
                'user' =>  $this->getReference('user-0'),
                'firstName' =>  'superboy',
                'birthDate' =>  new \DateTime('1993-03-20'),
            ),
            array(
                'user' => $this->getReference('user-1'),
                'firstName' => 'batboy',
                'birthDate' => new \DateTime('1994-01-20'),
            ),
            array(
                'user' => $this->getReference('user-1'),
                'firstName' => 'spiderboy',
                'birthDate' => new \DateTime('1995-06-20'),
            ),
            array(
                'user' => $this->getReference('user-3'),
                'firstName' => 'Julie',
                'birthDate' => new \DateTime('1993-02-01'),
            ),
            array(
                'user' => $this->getReference('user-3'),
                'firstName' => 'Alexis',
                'birthDate' => new \DateTime('1993-11-27'),
            ),
            array(
                'user' => $this->getReference('user-4'),
                'firstName' => 'Florian',
                'birthDate' => new \DateTime('2001-05-15'),
            ),
            array(
                'user' => $this->getReference('user-4'),
                'firstName' => 'Morgane',
                'birthDate' => new \DateTime('2003-09-02'),
            ),
            array(
                'user' => $this->getReference('user-4'),
                'firstName' => 'Cécile',
                'birthDate' => new \DateTime('2004-12-24'),
            ),
            array(
                'user' => $this->getReference('user-6'),
                'firstName' => 'Hugo',
                'birthDate' => new \DateTime('2012-09-11'),
            )

        );

        foreach ($childsData as $i => $c){
            $child = new Child();

            $child->setUser($c['user']);
            $child->setFirstName($c['firstName']);
            $child->setBirthDate($c['birthDate']);

            $manager->persist($child);

            $this->addReference('child-'.$i, $child);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }


}