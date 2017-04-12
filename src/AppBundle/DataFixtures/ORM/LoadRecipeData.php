<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Recipe;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadRecipeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $recipes = array(
            array(
                'name'          => 'recette 1',
                'recipeType'    => $this->getReference('recipeType-0'),
                'photoRecipe'   => $this->getReference('photoRecipe-0'),
                'season'        => $this->getReference('season-0'),
            ),
            array(
                'name'          => 'recette 2',
                'recipeType'    => $this->getReference('recipeType-1'),
                'photoRecipe'   => $this->getReference('photoRecipe-1'),
                'season'        => $this->getReference('season-1'),
            ),
            array(
                'name'          => 'recette 3',
                'recipeType'    => $this->getReference('recipeType-2'),
                'photoRecipe'   => $this->getReference('photoRecipe-2'),
                'season'        => $this->getReference('season-2'),
            ),
            array(
                'name'          => 'recette 4',
                'recipeType'    => $this->getReference('recipeType-0'),
                'photoRecipe'   => $this->getReference('photoRecipe-3'),
                'season'        => $this->getReference('season-3'),
            ),
        );

        foreach ($recipes as $i => $r) {
            $recipe = new Recipe();

            $recipe->setName($r['name']);
            $recipe->setRecipeType($r['recipeType']);
            $recipe->setPhotoRecipe($r['photoRecipe']);
            $recipe->setSeason($r['season']);

            $manager->persist($recipe);
            $this->addReference('recipe-'.$i, $recipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 110;
    }

}