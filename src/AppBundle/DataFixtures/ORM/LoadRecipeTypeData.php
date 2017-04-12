<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\RecipeType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadRecipeTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $recipeTypes = array(
            array(
                'wording'   => 'Entrée',
            ),
            array(
                'wording' => 'Plat',
            ),
            array(
                'wording' => 'Dessert',
            ),
        );

        foreach ($recipeTypes as $i => $rt) {
            $recipeType = new RecipeType();

            $recipeType->setWording($rt['wording']);

            $manager->persist($recipeType);
            $this->addReference('recipeType-'.$i, $recipeType);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 90;
    }

}