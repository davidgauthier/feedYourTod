<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Recipe;

class RecipeManager extends AbstractDoctrineManager
{

    /**
     * @return Recipe
     */
    public function getRecipeById($id)
    {
        return $this->getRepository()->findOneById($id);
    }

    public function getRecipeBySearch($search)
    {
        return $this->getRepository()->getSearchRecipe($search);
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