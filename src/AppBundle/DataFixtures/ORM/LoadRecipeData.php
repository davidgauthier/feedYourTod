<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Recipe;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;


class LoadRecipeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $content1 = "Faire une pâte à tarte ou en acheter une toute faite (brisée ou feuilletée) et foncer un plat beurré ou huilé.
                        Couvrir le fond de la pâte d'une couche de moutarde. Émietter le thon et l'étaler sur la moutarde. Recouvrir le thon de gruyère râpé.
                        Couper les tomates en rondelles et les disposer côte à côte sur la couche de gruyère pour recouvrir celui-ci.
                        Poser ensuite une petite cuillerée de crème fraîche épaisse sur chaque rondelle de tomate et ajouter un peu de gruyère pour faire dorer la tarte.
                        Faire quelques tours de moulin à poivre et enfourner à 180°c pendant une vingtaine de minutes.
                        Pour finir
                        Servir chaud.";
        $content2 = "Émincer les échalotes et les faire légèrement colorer dans une sauteuse.
                        Une fois les échalotes colorées et la poêle bien chaude, ajouter les escalopes. Saler et poivrer. Vous pouvez également ajouter un peu de cannelle en poudre.
                        Quand les escalopes sont cuites (le temps de cuisson dépend de l'épaisseur de la viande), ajouter la crème liquide et porter à feu doux pour faire légèrement réduire la crème.
                        Réduire les spéculoos en poudre (au mixeur ou avec le fond d'un verre) et les ajouter à la préparation toujours à feu doux, la crème va alors épaissir.
                        Pour finir
                        Laissez quelques instants (2 minutes) et stopper la cuisson quand la sauce est assez épaisse mais crémeuse.";
        $content3 = "Préchauffez le four à 190°C.
                        Prélevez le zeste du citron puis récupérez-en le jus. Dans un saladier, mélangez les œufs, la farine, la levure, l’huile d’olive, la crème fraîche jusqu’à ce que le mélange soit crémeux.
                        Ajoutez le jus de citron et son zeste, fouettez bien. Incorporez le gruyère râpé, le saumon coupé en morceaux, la ciboulette ciselée. Salez et poivrez.
                        Pour finir
                        Versez la pâte dans un moule à cake beurré. Faites cuire 45 minutes à 190°C.";
        $content4 = "Préchauffez le four à 180°C (thermostat 6). Coupez le jambon en dés.
                        Versez dans un saladier la farine et la levure tamisées. Ajoutez les oeufs et l'huile d'olive. Continuez à travailler la pâte jusqu'à l'obtention d'une crème lisse.
                        Ajoutez les dés de jambon à cette pâte, les olives, le gruyère et une bonne pincée de poivre. Mélangez le tout.
                        Beurrez un moule à cake, versez-y la préparation et laissez cuire 45 minutes.
                        Pour finir
                        Laissez refroidir avant de le servir.";

        $recipes = array(
            array(
                'name'          => 'recette 1',
                'recipeType'    => $this->getReference('recipeType-0'),
                'photoRecipe'   => $this->getReference('photoRecipe-0'),
                'season'        => $this->getReference('season-0'),
                'content'       => $content1,
            ),
            array(
                'name'          => 'recette 2',
                'recipeType'    => $this->getReference('recipeType-1'),
                'photoRecipe'   => $this->getReference('photoRecipe-1'),
                'season'        => $this->getReference('season-1'),
                'content'       => $content2,
            ),
            array(
                'name'          => 'recette 3',
                'recipeType'    => $this->getReference('recipeType-2'),
                'photoRecipe'   => $this->getReference('photoRecipe-2'),
                'season'        => $this->getReference('season-2'),
                'content'       => $content3,
            ),
            array(
                'name'          => 'recette 4',
                'recipeType'    => $this->getReference('recipeType-0'),
                'photoRecipe'   => $this->getReference('photoRecipe-3'),
                'season'        => $this->getReference('season-3'),
                'content'       => $content4,
            ),
        );

        foreach ($recipes as $i => $r) {
            $recipe = new Recipe();

            $recipe->setName($r['name']);
            $recipe->setRecipeType($r['recipeType']);
            $recipe->setPhotoRecipe($r['photoRecipe']);
            $recipe->setSeason($r['season']);
            $recipe->setCantent($r['content']);

            $manager->persist($recipe);
            $this->addReference('recipe-'.$i, $recipe);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 110;
    }

}