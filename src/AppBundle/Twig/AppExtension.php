<?php


namespace AppBundle\Twig;

use AppBundle\Entity\Menu;
use AppBundle\Entity\Recipe;

class AppExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('photoMenu', array($this, 'photoMenuFilter')),
        );
    }

    /**
     * @param Menu $menu
     * @return
     */
    public function photoMenuFilter(Menu $menu)
    {
        $photosMenu = [];

        // Ici recup une photo (aleatoire) parmis TOUTES les photos des recettes du menu
        foreach ($menu->getRecipes() as $recipe) {
            /** @var Recipe $recipe */
            if($recipe->getPhotoRecipes()){
                foreach ($recipe->getPhotoRecipes() as $photoRecipe) {
                    array_push($photosMenu, $photoRecipe);
                }
            }
        }

        if (!count($photosMenu)) {
            return;
        }

        return $photosMenu[array_rand($photosMenu)];
    }


}