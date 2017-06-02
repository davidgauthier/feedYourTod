<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\PhotoRecipe;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPhotoRecipeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $photoRecipes = [
            [
                'src' => '../photoRecipesFixture/puree-potimarron-419x375_002_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-0'),
            ],
            [
                'src' => '../photoRecipesFixture/puree-pommes-419x375_002_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-1'),
            ],
            [
                'src' => '../photoRecipesFixture/puree-bananes-419x375_002_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-2'),
            ],
            [
                'src' => '../photoRecipesFixture/porridge_4597-2-choix_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-3'),
            ],
            [
                'src' => '../photoRecipesFixture/ecraseue_lentilles4581-choix_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-4'),
            ],
            [
                'src' => '../photoRecipesFixture/porridge_4226.resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-5'),
            ],
            [
                'src' => '../photoRecipesFixture/gateau_bleu_resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-6'),
            ],
            [
                'src' => '../photoRecipesFixture/semoule_au_lait_fraise_resize_0_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-7'),
            ],
            [
                'src' => '../photoRecipesFixture/yaourt_1556_resizeu_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-8'),
            ],
            [
                'src' => '../photoRecipesFixture/petits_flans_1587_resizeu_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-9'),
            ],
            [
                'src' => '../photoRecipesFixture/velouteu_carotte_pomme_1527_resizeu_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-10'),
            ],
            [
                'src' => '../photoRecipesFixture/papillon1495_resize_0_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-11'),
            ],
            [
                'src' => '../photoRecipesFixture/semoule_resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-12'),
            ],
            [
                'src' => '../photoRecipesFixture/delice_resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-13'),
            ],
            [
                'src' => '../photoRecipesFixture/soupe_blanche_resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-14'),
            ],
            [
                'src' => '../photoRecipesFixture/veloute_potimarron_resize_0_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-15'),
            ],
            [
                'src' => '../photoRecipesFixture/crepes_framboises_resize_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-16'),
            ],
            [
                'src' => '../photoRecipesFixture/capuccino_mangue_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-17'),
            ],
            [
                'src' => '../photoRecipesFixture/poire-belle-helene_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-18'),
            ],
            [
                'src' => '../photoRecipesFixture/petits_flans_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-19'),
            ],
            [
                'src' => '../photoRecipesFixture/veloute_poires_vanille_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-20'),
            ],
            [
                'src' => '../photoRecipesFixture/puree-potimarron-curcuma-eveil_1_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-21'),
            ],
            [
                'src' => '../photoRecipesFixture/crecme_vanille_banane_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-22'),
            ],
            [
                'src' => '../photoRecipesFixture/crecme_multi_cereales_fraise_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-23'),
            ],
            [
                'src' => '../photoRecipesFixture/velouteu_leugumes_potager_0_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-24'),
            ],
            [
                'src' => '../photoRecipesFixture/pureue_deupinards_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-25'),
            ],
            [
                'src' => '../photoRecipesFixture/crecmes_au_caramel_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-26'),
            ],
            [
                'src' => '../photoRecipesFixture/mousse_au_potiron_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-27'),
            ],
            [
                'src' => '../photoRecipesFixture/clafoutis_1_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-28'),
            ],
            [
                'src' => '../photoRecipesFixture/parmentier_0_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-29'),
            ],
            [
                'src' => '../photoRecipesFixture/mug-cakes_facoon_pizza_decs_12_mois_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-30'),
            ],
            [
                'src' => '../photoRecipesFixture/petits_clafoutis_ac_la_nicooise_decs_12_mois_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-31'),
            ],
            [
                'src' => '../photoRecipesFixture/flan_de_petits_pois_au_checvre_frais_decs_10_mois_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-32'),
            ],
            [
                'src' => '../photoRecipesFixture/filet_de_sole_rouleu_sur_crecme_dasperges_decs_10_mois_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-33'),
            ],
            [
                'src' => '../photoRecipesFixture/clafouti_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-34'),
            ],
            [
                'src' => '../photoRecipesFixture/hachis1_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-35'),
            ],
            [
                'src' => '../photoRecipesFixture/tomate1_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-36'),
            ],
            [
                'src' => '../photoRecipesFixture/clafoutis_2.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-37'),
            ],
            [
                'src' => '../photoRecipesFixture/gratin_de_courgettes_decs_10_mois_0.png',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-38'),
            ],
            [
                'src' => '../photoRecipesFixture/Crepe de pomme de terre - Des 12 mois_0.jpg',
                'legend' => 'photo',
                'recipe' => $this->getReference('recipe-39'),
            ],
        ];

        foreach ($photoRecipes as $i => $pr) {
            $photoRecipe = new PhotoRecipe();
            $photoRecipe->setSrc($pr['src']);
            $photoRecipe->setRecipe($pr['recipe']);
            $photoRecipe->setLegend($pr['legend']);

            $manager->persist($photoRecipe);
            $this->addReference('photoRecipe-'.$i, $photoRecipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 110;
    }
}
