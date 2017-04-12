<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 12/04/2017
 * Time: 14:35
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Food;
use AppBundle\Entity\FoodType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFoodTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $foodsData = array(
            array(
                'wording' => 'vegetables',
            ),
            array(
                'wording' => 'meat',
            ),
            array(
                'wording' => 'drink',
            ),
            array(
                'wording' => 'biscuits',
            )
        );

        foreach ($foodsData as $i => $foodData){
            $food = new FoodType();
            $food->setWording($foodData['wording']);

            $manager->persist($food);

            $this->addReference('foodType -'.$i, $food);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 50;

    }

}