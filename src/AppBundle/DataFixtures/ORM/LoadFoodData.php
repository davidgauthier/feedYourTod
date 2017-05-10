<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Food;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFoodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $foodData = [
            [
                'wording' => 'potimarron',
                'foodType' => $this->getReference('foodType-0'),        //-----------0
            ],
            [
                'wording' => 'lait en poudre',
                'foodType' => $this->getReference('foodType-4'),        //-----------1
            ],
            [
                'wording' => 'persil',
                'foodType' => $this->getReference('foodType-0'),        //-----------2
            ],
            [
                'wording' => 'pomme',
                'foodType' => $this->getReference('foodType-3'),        //-----------3
            ],
            [
                'wording' => 'vanille en poudre',
                'foodType' => $this->getReference('foodType-4'),        //-----------4
            ],
            [
                'wording' => 'eau de fleur d\'oranger',
                'foodType' => $this->getReference('foodType-5'),        //-----------5
            ],
            [
                'wording' => 'potiron',
                'foodType' => $this->getReference('foodType-0'),        //-----------6
            ],
            [
                'wording' => 'banane',
                'foodType' => $this->getReference('foodType-3'),        //-----------7
            ],
            [
                'wording' => 'poudre de cacao',
                'foodType' => $this->getReference('foodType-4'),        //-----------8
            ],
            [
                'wording' => 'poire',
                'foodType' => $this->getReference('foodType-3'),        //-----------9
            ],
            [
                'wording' => 'pétale de maïs',
                'foodType' => $this->getReference('foodType-6'),        //-----------10
            ],
            [
                'wording' => 'lentille',
                'foodType' => $this->getReference('foodType-0'),        //-----------11
            ],
            [
                'wording' => 'tomate',
                'foodType' => $this->getReference('foodType-3'),        //-----------12
            ],
            [
                'wording' => 'flocons d\'avoine',
                'foodType' => $this->getReference('foodType-6'),        //-----------13
            ],
            [
                'wording' => 'framboises',
                'foodType' => $this->getReference('foodType-3'),        //-----------14
            ],
            [
                'wording' => 'sirop d\'orgeat',
                'foodType' => $this->getReference('foodType-2'),        //-----------15
            ],
            [
                'wording' => 'prunes',
                'foodType' => $this->getReference('foodType-3'),        //-----------16
            ],
            [
                'wording' => 'poudre de canelle',
                'foodType' => $this->getReference('foodType-4'),        //-----------17
            ],
            [
                'wording' => 'poudre de gimgembre',
                'foodType' => $this->getReference('foodType-4'),        //-----------18
            ],
            [
                'wording' => 'poudre de curcuma',
                'foodType' => $this->getReference('foodType-4'),        //-----------19
            ],
            [
                'wording' => 'sucre',
                'foodType' => $this->getReference('foodType-4'),        //-----------20
            ],

            [
                'wording' => 'beurre',
                'foodType' => $this->getReference('foodType-7'),        //-----------21
            ],

            [
                'wording' => 'chocolat noir',
                'foodType' => $this->getReference('foodType-7'),        //-----------22
            ],

            [
                'wording' => 'chocolat',
                'foodType' => $this->getReference('foodType-7'),        //-----------23
            ],
            [
                'wording' => 'farine',
                'foodType' => $this->getReference('foodType-4'),        //-----------24
            ],

            [
                'wording' => 'levure',
                'foodType' => $this->getReference('foodType-4'),        //-----------25
            ],
            [
                'wording' => 'semoule',
                'foodType' => $this->getReference('foodType-8'),        //-----------26
            ],
            [
                'wording' => 'fraise',
                'foodType' => $this->getReference('foodType-3'),        //-----------27
            ],
            [
                'wording' => 'yaourt',
                'foodType' => $this->getReference('foodType-9'),        //-----------28
            ],
            [
                'wording' => 'lait',
                'foodType' => $this->getReference('foodType-9'),        //-----------29
            ],
            [
                'wording' => 'oeuf de poule',
                'foodType' => $this->getReference('foodType-10'),       //-----------30
            ],
            [
                'wording' => 'pêche',
                'foodType' => $this->getReference('foodType-3'),        //-----------31
            ],
            [
                'wording' => 'mangue',
                'foodType' => $this->getReference('foodType-3'),        //-----------32
            ],
            [
                'wording' => 'carotte',
                'foodType' => $this->getReference('foodType-0'),        //-----------33
            ],
            [
                'wording' => 'ciboulette',
                'foodType' => $this->getReference('foodType-0'),        //-----------34
            ],
            [
                'wording' => 'crème fraîche',
                'foodType' => $this->getReference('foodType-7'),        //-----------35
            ],
            [
                'wording' => 'pomme de terre',
                'foodType' => $this->getReference('foodType-0'),        //-----------36
            ],
            [
                'wording' => 'petits pois',
                'foodType' => $this->getReference('foodType-0'),        //-----------37
            ],
            [
                'wording' => 'cereale au cacao',
                'foodType' => $this->getReference('foodType-6'),        //-----------38
            ],
            [
                'wording' => 'chou-fleur',
                'foodType' => $this->getReference('foodType-0'),        //-----------39
            ],
            [
                'wording' => 'celery-rave',
                'foodType' => $this->getReference('foodType-0'),        //-----------40
            ],
            [
                'wording' => 'multi-cereale',
                'foodType' => $this->getReference('foodType-6'),        //-----------41
            ],
             [
                 'wording' => 'cereale nature',
                 'foodType' => $this->getReference('foodType-6'),        //-----------42
             ],
            [
                'wording' => 'cereale vanille',
                'foodType' => $this->getReference('foodType-6'),         //-----------43
            ],
            [
                'wording' => 'cereale légumes',
                'foodType' => $this->getReference('foodType-6'),         //-----------44
            ],
            [
                'wording' => 'épinards',
                'foodType' => $this->getReference('foodType-0'),         //-----------45
            ],

            [
                'wording' => 'feuille de gélatine',
                'foodType' => $this->getReference('foodType-11'),        //-----------46
            ],
            [
                'wording' => 'caramel',
                'foodType' => $this->getReference('foodType-7'),         //-----------47
            ],
             [
                 'wording' => 'cabillaud',
                 'foodType' => $this->getReference('foodType-12'),       //-----------48
             ],
             [
                 'wording' => 'sel',
                 'foodType' => $this->getReference('foodType-4'),        //-----------49
             ],
            [
                'wording' => 'poivre',
                'foodType' => $this->getReference('foodType-4'),         //-----------50
            ],
            [
                'wording' => 'saumon',
                'foodType' => $this->getReference('foodType-12'),        //-----------51
            ],
            [
                'wording' => 'poireau',
                'foodType' => $this->getReference('foodType-0'),         //-----------52
            ],
            [
                'wording' => 'thon',
                'foodType' => $this->getReference('foodType-12'),        //-----------53
            ],
            [
                'wording' => 'mozzarella',
                'foodType' => $this->getReference('foodType-7'),         //-----------54
            ],
            [
                'wording' => 'jambon',
                'foodType' => $this->getReference('foodType-1'),         //-----------55
            ],
            [
                'wording' => 'poivron',
                'foodType' => $this->getReference('foodType-0'),         //-----------56
            ],
            [
                'wording' => 'courgette',
                'foodType' => $this->getReference('foodType-0'),         //-----------57
            ],
            [
                'wording' => 'aubergine',
                'foodType' => $this->getReference('foodType-0'),         //-----------58
            ],
            [
                'wording' => 'oignon',
                'foodType' => $this->getReference('foodType-0'),         //-----------59
            ],
            [
                'wording' => 'huile d\'olive',
                'foodType' => $this->getReference('foodType-0'),         //-----------60
            ],
            [
                'wording' => 'origan',
                'foodType' => $this->getReference('foodType-0'),         //-----------61
            ],
            [
                'wording' => 'fromage chèvre',
                'foodType' => $this->getReference('foodType-7'),         //-----------62
            ],
            [
                'wording' => 'sole',
                'foodType' => $this->getReference('foodType-12'),        //-----------62
            ],
            [
                'wording' => 'asperge',
                'foodType' => $this->getReference('foodType-0'),          //-----------63
            ],
            [
                'wording' => 'boeuf',
                'foodType' => $this->getReference('foodType-1'),          //-----------64
            ],
            [
                'wording' => 'thym',
                'foodType' => $this->getReference('foodType-0'),          //-----------65
            ],
            [
                'wording' => 'saucisse',
                'foodType' => $this->getReference('foodType-1'),          //-----------66
            ],
            [
                'wording' => 'ananas',
                'foodType' => $this->getReference('foodType-3'),          //-----------67
            ],
            [
                'wording' => 'muscade',
                'foodType' => $this->getReference('foodType-4'),          //-----------68
            ],
            [
                'wording' => 'fromage',
                'foodType' => $this->getReference('foodType-7'),          //-----------69
            ],
        ];

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
