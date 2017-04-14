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
                'src'       => '%kernel.root_dir%/../web/uploads/photoRecipesFixture/Chrysanthemum.jpg',
                'legend'    => 'rien',
                'recipe'    => $this->getReference('recipe-1'),
            ),
            array(
                'src'       => '%kernel.root_dir%/../web/uploads/photoRecipesFixture/Desert.jpg',
                'legend'    => 'rien',
                'recipe'    => $this->getReference('recipe-1'),
            ),
            array(
                'src'       => '%kernel.root_dir%/../web/uploads/photoRecipesFixture/Hydrangeas.jpg',
                'legend'    => 'rien',
                'recipe'    => $this->getReference('recipe-2'),
            ),
            array(
                'src'       => '%kernel.root_dir%/../web/uploads/photoRecipesFixture/Jellyfish.jpg',
                'legend'    => 'rien',
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