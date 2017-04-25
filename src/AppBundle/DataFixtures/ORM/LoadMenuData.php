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
                'name'   => 'Menu Omega 3',
                'season' => $this->getReference('season-0'),
                'recipes' => [
                    $this->getReference('recipe-4'),
                    $this->getReference('recipe-31'),
                ],
                'subtitle' => 'Menu convenant aux enfants, plein de proteines et d\'omega 3'
            ),
            array(
                'name'   => 'Menu Plaiz-max',
                'season' => $this->getReference('season-1'),
                'recipes' => [
                    $this->getReference('recipe-0'),
                    $this->getReference('recipe-6'),
                    $this->getReference('recipe-20'),
                ],
                'subtitle' => 'Menu convenant aux enfants, pour un maximum de plaisir'
            ),
            array(
                'name'   =>  'Menu journée tranquille',
                'season' => $this->getReference('season-1'),
                'recipes' => [
                    $this->getReference('recipe-1'),
                    $this->getReference('recipe-10'),
                    $this->getReference('recipe-12'),
                ],
                'subtitle' => 'Menu Cool à préparer pour les parents !'
            ),
            array(
                'name'   =>  'Menu Petit Popeye',
                'season' => $this->getReference('season-1'),
                'recipes' => [
                    $this->getReference('recipe-2'),
                    $this->getReference('recipe-12'),
                    $this->getReference('recipe-37'),
                ],
                'subtitle' => 'Menu très fort en fer, convenant aux enfants en bas age.'
            ),
            array(
                'name'   =>  'Menu Gourmand',
                'season' => $this->getReference('season-3'),
                'recipes' => [
                    $this->getReference('recipe-9'),
                    $this->getReference('recipe-14'),
                    $this->getReference('recipe-23'),
                ],
                'subtitle' => 'Menu convenant aux enfants en bas age, fort en fer'
            ),
            array(
                'name'   => 'Menu Vitamines',
                'season' => $this->getReference('season-2'),
                'recipes' => [
                    $this->getReference('recipe-8'),
                    $this->getReference('recipe-12'),
                ],
                'subtitle' => 'Menu convenant aux enfants ayant besoin de vitamines.'
            ),
        );

        foreach ($menusData as $i => $m) {
            $menu = new Menu();

            $menu
                ->setName($m['name'])
                ->setSeason($m['season'])
                ->setSubtitle($m['subtitle']);

            foreach ($m['recipes'] as $j => $r){
                $menu->addRecipe($r);
            }

            $manager->persist($menu);
            $this->addReference('menu-'.$i, $menu);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 120;
    }

}