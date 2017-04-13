<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\ChildFoodTag;

class LoadChildFoodTagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $childFoodTagsData = [
            'adore',
            'aime',
            'n\'aime pas',
            'est allergique',
            'interdit par le médecin',
            'n\'a jamais gouté',
        ];

        foreach ($childFoodTagsData as $i => $cft) {

            $childFoodTag = new ChildFoodTag();

            $childFoodTag->setWording($cft);
            $manager->persist($childFoodTag);

            $this->addReference('childFoodTag-'.$i, $childFoodTag);
        }
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 70;
    }
}