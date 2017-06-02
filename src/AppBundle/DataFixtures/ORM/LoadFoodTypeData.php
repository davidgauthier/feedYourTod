<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 12/04/2017
 * Time: 14:35.
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\FoodType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFoodTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $foodTypesData = [
            [
                'wording' => 'vegetables',   //-----------0
            ],
            [
                'wording' => 'meat',         //-----------1
            ],
            [
                'wording' => 'drink',        //-----------2
            ],
            [
                'wording' => 'fruits',       //-----------3
            ],
            [
                'wording' => 'powder',       //-----------4
            ],
            [
                'wording' => 'liquid',       //-----------5
            ],
            [
                'wording' => 'cereal',       //-----------6
            ],
            [
                'wording' => 'melting',      //-----------7
            ],
            [
                'wording' => 'starchy',      //-----------8
            ],
            [
                'wording' => 'milky',        //-----------9
            ],
            [
                'wording' => 'egg',          //-----------10
            ],
            [
                'wording' => 'cake',         //-----------11
            ],
            [
                'wording' => 'fish',         //-----------12
            ],
        ];

        foreach ($foodTypesData as $i => $ft) {
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
