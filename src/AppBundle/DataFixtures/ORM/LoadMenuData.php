<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Menu;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\Season;

class LoadMenuData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $menus = array(
            array(
                'name'   => 'Purée de patate douce au boeuf',
                'season' => $this->getReference('season-0'),
            ),
            array(
                'name'   => 'Soupe de poulet aux vermicelles et légumes',
                'season' => $this->getReference('season-1'),
            ),
            array(
                'name'   => 'Petit gratin à la bolognaise',
                'season' => $this->getReference('season-2'),
            ),
            array(
                'name'   =>  'Risotto escalope dinde aux légumes',
                'season' => $this->getReference('season-3'),
            ),
        );

        foreach ($menus as $i => $menu) {
            $recipe = new Menu();

            $recipe->setName($menu['name']);
            $recipe->setSeason($menu['season']);

            $manager->persist($recipe);
            $this->addReference('recipe-'.$i, $recipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 40;
    }

}