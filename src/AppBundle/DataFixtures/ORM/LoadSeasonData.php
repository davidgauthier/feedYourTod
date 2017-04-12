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

        $seasons = array(
            array(
                'name'      => 'Winter',
                'begindate' => new \DateTime('2017-12-21'),
                'enddate'   => new \DateTime('2017-03-19')
            ),
            array(
                'name'      => 'Spring',
                'begindate' => new \DateTime('2017-03-20'),
                'enddate'   => new \DateTime('2017-06-18'),
            ),
            array(
                'name'      => 'Summer',
                'begindate' => new \DateTime('2017-06-19'),
                'enddate'   => new \DateTime('2017-08-20'),
            ),
            array(
                'name'      => 'Autumn',
                'begindate' => new \DateTime('2017-08-21'),
                'enddate'   => new \DateTime('2017-03-18'),
            ),
        );

        foreach ($seasons as $i => $season) {
            $s = new Season();

            $s->setName($season['name']);
            $s->setDateBegin($season['begindate']);
            $s->setDateEnd($season['enddate']);

            $manager->persist($s);
            $this->addReference('season-'.$i, $s);
        }
        $manager->flush();
    }
    public function getOrder()
    {
        return 20;
    }
}