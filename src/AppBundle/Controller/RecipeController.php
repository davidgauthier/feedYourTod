<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecipeController extends Controller
{
    public function displayRandomRecipesAction(Request $request)
    {
        //        $dateTime = new \DateTime();
//        $seasonManager = $this->container->get("app.season_manager");
//        $season = $seasonManager->getCurrentSeason($dateTime);

        $rm = $this->container->get('app.recipe_manager');
        $listRandomRecipes = $rm->getRandomRecipes(3, null);

        return $this->render(':include:_sidebar_recipes.html.twig', [
            'listRandomRecipes' => $listRandomRecipes,
        ]);
    }
}
