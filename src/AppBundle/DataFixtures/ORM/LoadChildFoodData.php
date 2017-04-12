<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 12/04/2017
 * Time: 15:08
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\ChildFood;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadChildFoodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $childsFoodsData = array(
           array(
               'child' => $this->getReference('child-0'),
               'food' => $this->getReference('food-0'),
               'childFoodTag' => $this->getReference('childFoodTag-0'),
           )
       );

       foreach ($childsFoodsData as $i => $cf){
           $childFood = new ChildFood();

           $childFood->setChild($cf['child']);
           $childFood->setFood($cf['food']);
           $childFood->setChildFoodTag($cf['childFoodTag']);

           $manager->persist($childFood);

           $this->addReference('childFood-'.$i, $childFood);
       }

       $manager->flush();
    }

    public function getOrder()
    {
        return 80;
    }

}