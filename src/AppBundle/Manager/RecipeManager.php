<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Recipe;

class RecipeManager extends AbstractDoctrineManager
{
    /**
     * @return array
     */
    public function getAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @return Recipe
     */
    public function getRecipeById($id)
    {
        return $this->getRepository()->findOneById($id);
    }

    /**
     * @return Recipe
     */
    public function getRecipeBySearch($search)
    {
        return $this->getRepository()->getSearchRecipe($search);
    }

    public function getRandomRecipes($limit = 5, $season = null)
    {
        return $this->getRepository()->getRandomRecipes($limit, $season);
    }

    /**
     * @return Recipe
     */
    public function getRandomRecipe()
    {
        return $this->getRepository()->getRandomRecipe();
    }

    /**
     * @return Recipe
     */
    public function create()
    {
        return new Recipe();
    }

    /**
     * @return \AppBundle\Repository\RecipeRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository(Recipe::class);
    }
}
