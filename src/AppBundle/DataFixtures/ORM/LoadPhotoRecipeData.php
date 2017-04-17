<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\PhotoRecipe;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;



class LoadPhotoRecipeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $photoRecipes = array(
            array(
                'src'       => '../photoRecipesFixture/Chrysanthemum.jpg',
                'legend'    => 'Chrysanthemum',
                'recipe'    => $this->getReference('recipe-1'),
            ),
            array(
                'src'       => '../photoRecipesFixture/Desert.jpg',
                'legend'    => 'Desert',
                'recipe'    => $this->getReference('recipe-1'),
            ),
            array(
                'src'       => '../photoRecipesFixture/Hydrangeas.jpg',
                'legend'    => 'Hydrangeas',
                'recipe'    => $this->getReference('recipe-2'),
            ),
            array(
                'src'       => '../photoRecipesFixture/Jellyfish.jpg',
                'legend'    => 'Jellyfish',
                'recipe'    => $this->getReference('recipe-3'),
            ),
        );

        foreach ($photoRecipes as $i => $pr) {
            $photoRecipe = new PhotoRecipe();
            $photoRecipe->setSrc($pr['src']);
            $photoRecipe->setRecipe($pr['recipe']);
            $photoRecipe->setLegend($pr['legend']);

            $manager->persist($photoRecipe);
            $this->addReference('photoRecipe-'.$i, $photoRecipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 110;
    }

}