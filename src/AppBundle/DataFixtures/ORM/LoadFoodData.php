<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Food;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadFoodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $fooddetails = array(
            array(
                'wording'     => 'egg',
                'foodtype' => $this->getReference('foodType-0'),
            ),
            array(
                'wording'     => 'tomato',
                'foodtype' => $this->getReference('foodType-1'),
            ),
            array(
                'wording'     => 'beef',
                'foodtype' => $this->getReference('foodType-2'),
            ),
            array(
                'wording'   => 'Rice',
                'foodtype' => $this->getReference('foodType-3'),
            ),
        );

        foreach ($fooddetails as $i => $fooddetail) {
            $food = new Food();

            $food->setWording($fooddetail['wording']);
            $food->setFoodType($fooddetail['foodtype']);

            $manager->persist($food);
            $this->addReference('food-'.$i, $food);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 80;
    }
}