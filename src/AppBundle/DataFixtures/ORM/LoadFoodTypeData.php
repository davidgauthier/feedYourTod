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
        $foodTypesData = array(
            array(
                'wording' => 'vegetables',   //-----------0
            ),
            array(
                'wording' => 'meat',         //-----------1
            ),
            array(
                'wording' => 'drink',        //-----------2
            ),
            array(
                'wording' => 'fruits',       //-----------3
            ),
            array(
                'wording' => 'powder',       //-----------4
            ),
            array(
                'wording' => 'liquid',       //-----------5
            ),
            array(
                'wording' => 'cereal',       //-----------6
            ),
            array(
                'wording' => 'melting',      //-----------7
            ),
            array(
                'wording' => 'starchy',      //-----------8
            ),
            array(
                'wording' => 'milky',        //-----------9
            ),
            array(
                'wording' => 'egg',          //-----------10
            ),
            array(
                'wording' => 'cake',         //-----------11
            ),
            array(
                'wording' => 'fish',         //-----------12
            ),


        );

        foreach ($foodTypesData as $i => $ft){
            $foodType = new FoodType();

            $foodType->setWording($ft['wording']);

            $manager->persist($foodType);
            $this->addReference('foodType-'.$i, $foodType);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 50;

    }

}