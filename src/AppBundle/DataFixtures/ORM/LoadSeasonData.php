<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Season;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadSeasonData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $seasonsData = array(
            array(
                'name'      => 'Hiver',
                'begindate' => new \DateTime('2017-12-21'),
                'enddate'   => new \DateTime('2017-03-19')
            ),
            array(
                'name'      => 'Printemps',
                'begindate' => new \DateTime('2017-03-20'),
                'enddate'   => new \DateTime('2017-06-20'),
            ),
            array(
                'name'      => 'Eté',
                'begindate' => new \DateTime('2017-06-21'),
                'enddate'   => new \DateTime('2017-09-22'),
            ),
            array(
                'name'      => 'Automne',
                'begindate' => new \DateTime('2017-09-23'),
                'enddate'   => new \DateTime('2017-12-20'),
            ),
        );

        foreach ($seasonsData as $i => $s) {
            $season = new Season();

            $season->setName($s['name']);
            $season->setDateBegin($s['begindate']);
            $season->setDateEnd($s['enddate']);

            $manager->persist($season);
            $this->addReference('season-'.$i, $season);
        }
        $manager->flush();
    }
    public function getOrder()
    {
        return 20;
    }
}