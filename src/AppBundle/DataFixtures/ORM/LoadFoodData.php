<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Food;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadFoodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $foodData = array(
            array(
                'wording'  => 'potimarron',
                'foodType' => $this->getReference('foodType-0'),        //-----------0
            ),
            array(
                'wording'  => 'lait en poudre',
                'foodType' => $this->getReference('foodType-4'),        //-----------1
            ),
            array(
                'wording'  => 'persil',
                'foodType' => $this->getReference('foodType-0'),        //-----------2
            ),
            array(
                'wording'  => 'pomme',
                'foodType' => $this->getReference('foodType-3'),        //-----------3
            ),
            array(
                'wording'  => 'vanille en poudre',
                'foodType' => $this->getReference('foodType-4'),        //-----------4
            ),
            array(
                'wording'  => 'eau de fleur d\'oranger',
                'foodType' => $this->getReference('foodType-5'),        //-----------5
            ),
            array(
                'wording'  => 'potiron',
                'foodType' => $this->getReference('foodType-0'),        //-----------6
            ),
            array(
                'wording'  => 'banane',
                'foodType' => $this->getReference('foodType-3'),        //-----------7
            ),
            array(
                'wording'  => 'poudre de cacao',
                'foodType' => $this->getReference('foodType-4'),        //-----------8
            ),
            array(
                'wording'  => 'poire',
                'foodType' => $this->getReference('foodType-3'),        //-----------9
            ),
            array(
                'wording'  => 'pétale de maïs',
                'foodType' => $this->getReference('foodType-6'),        //-----------10
            ),
            array(
                'wording'  => 'lentille',
                'foodType' => $this->getReference('foodType-0'),        //-----------11
            ),
            array(
                'wording'  => 'tomate',
                'foodType' => $this->getReference('foodType-3'),        //-----------12
            ),
            array(
                'wording'  => 'flocons d\'avoine',
                'foodType' => $this->getReference('foodType-6'),        //-----------13
            ),
            array(
                'wording'  => 'framboises',
                'foodType' => $this->getReference('foodType-3'),        //-----------14
            ),
            array(
                'wording'  => 'sirop d\'orgeat',
                'foodType' => $this->getReference('foodType-2'),        //-----------15
            ),
            array(
                'wording'  => 'prunes',
                'foodType' => $this->getReference('foodType-3'),        //-----------16
            ),
            array(
                'wording'  => 'poudre de canelle',
                'foodType' => $this->getReference('foodType-4'),        //-----------17
            ),
            array(
                'wording'  => 'poudre de gimgembre',
                'foodType' => $this->getReference('foodType-4'),        //-----------18
            ),
            array(
                'wording'  => 'poudre de curcuma',
                'foodType' => $this->getReference('foodType-4'),        //-----------19
            ),
            array(
                'wording'  => 'sucre',
                'foodType' => $this->getReference('foodType-4'),        //-----------20
            ),

            array(
                'wording'  => 'beurre',
                'foodType' => $this->getReference('foodType-7'),        //-----------21
            ),

            array(
                'wording'  => 'chocolat noir',
                'foodType' => $this->getReference('foodType-7'),        //-----------22
            ),

            array(
                'wording'  => 'chocolat',
                'foodType' => $this->getReference('foodType-7'),        //-----------23
            ),
            array(
                'wording'  => 'farine',
                'foodType' => $this->getReference('foodType-4'),        //-----------24
            ),

            array(
                'wording'  => 'levure',
                'foodType' => $this->getReference('foodType-4'),        //-----------25
            ),
            array(
                'wording'  => 'semoule',
                'foodType' => $this->getReference('foodType-8'),        //-----------26
            ),
            array(
                'wording'  => 'fraise',
                'foodType' => $this->getReference('foodType-3'),        //-----------27
            ),
            array(
                'wording'  => 'yaourt',
                'foodType' => $this->getReference('foodType-9'),        //-----------28
            ),
            array(
                'wording'  => 'lait',
                'foodType' => $this->getReference('foodType-9'),        //-----------29
            ),
            array(
                'wording'  => 'oeuf de poule',
                'foodType' => $this->getReference('foodType-10'),       //-----------30
            ),
            array(
                'wording'  => 'pêche',
                'foodType' => $this->getReference('foodType-3'),        //-----------31
            ),
            array(
                'wording'  => 'mangue',
                'foodType' => $this->getReference('foodType-3'),        //-----------32
            ),
            array(
                'wording'  => 'carotte',
                'foodType' => $this->getReference('foodType-0'),        //-----------33
            ),
            array(
                'wording'  => 'ciboulette',
                'foodType' => $this->getReference('foodType-0'),        //-----------34
            ),
            array(
                'wording'  => 'crème fraîche',
                'foodType' => $this->getReference('foodType-7'),        //-----------35
            ),
            array(
                'wording'  => 'pomme de terre',
                'foodType' => $this->getReference('foodType-0'),        //-----------36
            ),
            array(
                'wording'  => 'petits pois',
                'foodType' => $this->getReference('foodType-0'),        //-----------37
            ),
            array(
                'wording'  => 'cereale au cacao',
                'foodType' => $this->getReference('foodType-6'),        //-----------38
            ),
            array(
                'wording'  => 'chou-fleur',
                'foodType' => $this->getReference('foodType-0'),        //-----------39
            ),
            array(
                'wording'  => 'celery-rave',
                'foodType' => $this->getReference('foodType-0'),        //-----------40
            ),
            array(
                'wording'  => 'multi-cereale',
                'foodType' => $this->getReference('foodType-6'),        //-----------41
            ),
             array(
                 'wording'  => 'cereale nature',
                 'foodType' => $this->getReference('foodType-6'),        //-----------42
             ),
            array(
                'wording'  => 'cereale vanille',
                'foodType' => $this->getReference('foodType-6'),         //-----------43
            ),
            array(
                'wording'  => 'cereale légumes',
                'foodType' => $this->getReference('foodType-6'),         //-----------44
            ),
            array(
                'wording'  => 'épinards',
                'foodType' => $this->getReference('foodType-0'),         //-----------45
            ),

            array(
                'wording'  => 'feuille de gélatine',
                'foodType' => $this->getReference('foodType-11'),        //-----------46
            ),
            array(
                'wording'  => 'caramel',
                'foodType' => $this->getReference('foodType-7'),         //-----------47
            ),
             array(
                 'wording'  => 'cabillaud',
                 'foodType' => $this->getReference('foodType-12'),       //-----------48
             ),
             array(
                 'wording'  => 'sel',
                 'foodType' => $this->getReference('foodType-4'),        //-----------49
             ),
            array(
                'wording'  => 'poivre',
                'foodType' => $this->getReference('foodType-4'),         //-----------50
            ),
            array(
                'wording'  => 'saumon',
                'foodType' => $this->getReference('foodType-12'),        //-----------51
            ),
            array(
                'wording'  => 'poireau',
                'foodType' => $this->getReference('foodType-0'),         //-----------52
            ),
            array(
                'wording'  => 'thon',
                'foodType' => $this->getReference('foodType-12'),        //-----------53
            ),
            array(
                'wording'  => 'mozzarella',
                'foodType' => $this->getReference('foodType-7'),         //-----------54
            ),
            array(
                'wording'  => 'jambon',
                'foodType' => $this->getReference('foodType-1'),         //-----------55
            ),
            array(
                'wording'  => 'poivron',
                'foodType' => $this->getReference('foodType-0'),         //-----------56
            ),
            array(
                'wording'  => 'courgette',
                'foodType' => $this->getReference('foodType-0'),         //-----------57
            ),
            array(
                'wording'  => 'aubergine',
                'foodType' => $this->getReference('foodType-0'),         //-----------58
            ),
            array(
                'wording'  => 'oignon',
                'foodType' => $this->getReference('foodType-0'),         //-----------59
            ),
            array(
                'wording'  => 'huile d\'olive',
                'foodType' => $this->getReference('foodType-0'),         //-----------60
            ),
            array(
                'wording'  => 'origan',
                'foodType' => $this->getReference('foodType-0'),         //-----------61
            ),
            array(
                'wording'  => 'fromage chèvre',
                'foodType' => $this->getReference('foodType-7'),         //-----------62
            ),
            array(
                'wording'  => 'sole',
                'foodType' => $this->getReference('foodType-12'),        //-----------62
            ),
            array(
                'wording'  => 'asperge',
                'foodType' => $this->getReference('foodType-0'),          //-----------63
            ),
            array(
                'wording'  => 'boeuf',
                'foodType' => $this->getReference('foodType-1'),          //-----------64
            ),
            array(
                'wording'  => 'thym',
                'foodType' => $this->getReference('foodType-0'),          //-----------65
            ),
            array(
                'wording'  => 'saucisse',
                'foodType' => $this->getReference('foodType-1'),          //-----------66
            ),
            array(
                'wording'  => 'ananas',
                'foodType' => $this->getReference('foodType-3'),          //-----------67
            ),
            array(
                'wording'  => 'muscade',
                'foodType' => $this->getReference('foodType-4'),          //-----------68
            ),
            array(
                'wording'  => 'fromage',
                'foodType' => $this->getReference('foodType-7'),          //-----------69
            ),





        );

        foreach ($foodData as $i => $f) {
            $food = new Food();

            $food->setWording($f['wording']);
            $food->setFoodType($f['foodType']);

            $manager->persist($food);
            $this->addReference('food-'.$i, $food);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 60;
    }
}