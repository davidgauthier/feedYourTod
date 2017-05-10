<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Lexik\Bundle\CMSI18nBundle\Entity\Block;
use Lexik\Bundle\CMSI18nBundle\Entity\BlockTranslation;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class LoadCmsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function load(ObjectManager $manager)
    {
        $cms = new Block();
        $cms->setReference('homepage');
        $cms->setDescription('Homepage content');
        $cms->setCreatedAt(new \DateTime());
        $cms->setUpdatedAt(new \DateTime());

        $translation = new BlockTranslation();
        $translation->setLocale('fr');
        $translation->setBlock($cms);
        $translation->setContent('');
        $translation->setCreatedAt(new \DateTime());
        $translation->setUpdatedAt(new \DateTime());

        $cms->addTranslation($translation);

        $manager->persist($cms);
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
