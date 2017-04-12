<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Food;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadFoodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $foodData = array(
            array(
                'wording'  => 'egg',
                'foodType' => $this->getReference('foodType-0'),
            ),
            array(
                'wording'  => 'tomato',
                'foodType' => $this->getReference('foodType-1'),
            ),
            array(
                'wording'  => 'beef',
                'foodType' => $this->getReference('foodType-2'),
            ),
            array(
                'wording'  => 'Rice',
                'foodType' => $this->getReference('foodType-3'),
            ),
        );

        foreach ($foodData as $i => $f) {
            $food = new Food();

            $food->setWording($f['wording']);
            $food->setFoodType($f['foodType']);

            $manager->persist($food);
            $this->addReference('food-'.$i, $food);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 60;
    }
}