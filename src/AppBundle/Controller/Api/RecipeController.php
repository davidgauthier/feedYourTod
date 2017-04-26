<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Recipe;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * RecipeController.
 *
 * @FOSRest\Route(path="/api/recipes")
 */
class RecipeController extends FOSRestController
{
    /**
     * @FOSRest\View()
     * @FOSRest\Get("/")
     *
     *
     * @return Recipe[]
     */
    public function cgetAction()
    {
        return $this->getRecipeManager()->getAll();
    }

    /**
     * @return \AppBundle\Manager\RecipeManager
     */
    private function getRecipeManager()
    {
        return $this->get('app.recipe_manager');
    }
}
