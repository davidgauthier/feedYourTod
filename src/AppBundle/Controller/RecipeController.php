<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Recipe;

class RecipeController extends Controller
{
    /**
     * @Route("/recipe/{id}", name="app_recipe_detail")
     */
    public function getRecipe($id)
    {
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->getRecipe($id);

        if(!$recipe instanceof Recipe){
            throw $this->createNotFoundException(sprintf('This recipe does not exists', $id));
        }

        return $this->render(':recipe:recipe.html.twig', ['recipe' =>  $recipe,]);
    }

}