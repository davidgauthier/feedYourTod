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

        $menusData = array(
            array(
                'name'   => 'Menu 1',
                'season' => $this->getReference('season-0'),
            ),
            array(
                'name'   => 'Menu 2',
                'season' => $this->getReference('season-1'),
            ),
            array(
                'name'   => 'Menu 3',
                'season' => $this->getReference('season-2'),
            ),
            array(
                'name'   =>  'Menu 4',
                'season' => $this->getReference('season-3'),
            ),
        );

        foreach ($menusData as $i => $m) {
            $menu = new Menu();

            $menu->setName($m['name']);
            $menu->setSeason($m['season']);

            $manager->persist($menu);
            $this->addReference('menu-'.$i, $menu);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 40;
    }

}