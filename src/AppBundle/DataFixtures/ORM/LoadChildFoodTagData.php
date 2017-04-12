<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\ChildFoodTag;

class LoadChildFoodTagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $food = [
            'carrot',
            'banana',
            'shrimp',
            'nuts',
            'red beans',
            'apple',
        ];

        foreach ($food as $i => $food) {

            $foodtag = new ChildFoodTag();
            $foodtag->setWording($food);
            $manager->persist($foodtag);
            $this->addReference('foodtag-'.$i, $foodtag);
        }
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 60;
    }
}