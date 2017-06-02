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
        $block = new Block();
        $block
            ->setReference('homepage');
        $manager->persist($block);

        $translationBlock = new BlockTranslation();
        $translationBlock->setBlock($block);
        $translationBlock->setLocale('fr');
        $translationBlock->setContent('test');

        $manager->persist($translationBlock);
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
