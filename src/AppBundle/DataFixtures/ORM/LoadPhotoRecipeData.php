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
                'src'       => 'rien',
                'legend'    => 'rien',
            ),
            array(
                'src'       => 'rien',
                'legend'    => 'rien',
            ),
            array(
                'src'       => 'rien',
                'legend'    => 'rien',
            ),
            array(
                'src'       => 'rien',
                'legend'    => 'rien',
            ),
        );

        foreach ($photoRecipes as $i => $pr) {
            $photoRecipe = new PhotoRecipe();

            $photoRecipe->setSrc($pr['src']);
            $photoRecipe->setLegend($pr['legend']);

            $manager->persist($photoRecipe);
            $this->addReference('photoRecipe-'.$i, $photoRecipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 100;
    }

}