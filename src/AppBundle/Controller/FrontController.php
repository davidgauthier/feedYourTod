<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{

    /**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function indexAction(Request $request)
    {
        $dateTime = new \DateTime();



        // ici récupérer nos entités, formulaires, etc.
        $mm = $this->container->get('app.menu_manager');

        $seasonManager = $this->container->get("app.season_manager");
        $season = $seasonManager->getCurrentSeason($dateTime);

        $listRandomMenus = $mm->getRandomMenus(3, $season);



        return $this->render(':front:index.html.twig', [
//              'listMenus' => $mm->getAll(),
                'listRandomMenus' => $listRandomMenus,
                'season' => $season,
                //'listCategories' => array(),
            ]
        );
    }

    /**
     * @Route("/menus", name="app_menus")
     */
    public function menusAction()
    {
        $menuManager = $this->container->get("app.menu_manager");
        $menus = $menuManager->getListMenus();

        return $this->render(':front:menus.html.twig', [
            'menus' => $menus,
        ]);
    }

    /**
     * @Route("/menu/{id}", name="app_menu")
     */
    public function menuAction($id)
    {
        $menuManager = $this->container->get("app.menu_manager");
        $menu = $menuManager->getMenuById($id);


        if($menu == null)
        {
            throw new NotFoundHttpException("Le menu recherché n'existe pas.");
        }

        return $this->render(':front:menu.html.twig',[
            'menu' => $menu,
        ]);

    }

    /**
     * @Route("/recipes", name="app_recipes")
     */
    public function recipesAction()
    {
        $recipeManager = $this->container->get("app.recipe_manager");
        $recipes = $recipeManager->getAll();

        return $this->render(':front:recipes.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * @Route("/recipe/{id}", name="app_recipe")
     */
    public function recipeAction($id)
    {
        $recipeManager = $this->container->get("app.recipe_manager");
        $recipe = $recipeManager->getRecipeById($id);

        if($recipe == null)
        {
            throw new NotFoundHttpException("La recette recherchée n'existe pas.");
        }

        return $this->render(':front:recipe.html.twig',[
            'recipe' => $recipe,
        ]);

    }

    /**
     * @Route("/contact", name="app_contact", methods={"GET"})
     */
    public function contactAction(Request $request)
    {
        return $this->render(':front:contact.html.twig', [
                //'listCategories' => array(),
            ]
        );
    }


}
