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
                'user_id' =>  '4',
                'firstName' =>  'superboy',
                'birthDate' =>  new \DateTime('20/03/1993'),
            ),
            array(
                'user_id' => '5',
                'firstName' => 'batboy',
                'birthDate' => new \DateTime('20/01/1994')
            ),
            array(
                'user_id' => '6',
                'firstName' => 'spiderboy',
                'birthDate' => new \DateTime('20/06/1995')
            )
        );

        foreach ($childsData as $i => $childData){
            $child = new Child();
            $child->setUser($childData['user_id']);
            $child->setFirstName($childData['firstName']);
            $child->setBirthDate($childData['birthDate']);

            $manager->persist($child);

            $this->addReference('child -'.$i, $child);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }


}