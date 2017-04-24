<?php

namespace AppBundle\Controller;

use AppBundle\Form\SearchNavType;
use AppBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{


    public function createSearchFormAction(Request $request)
    {
        $form = $this->createForm(SearchNavType::class, null, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET'
        ]);

        return $this->render(':include:_search_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     *
     * @Route("/search-result", name="app_search_results", methods={"GET"})
     */
    public function searchResultsAction(Request $request)
    {
        $form = $this->createForm(SearchType::class, null, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET'
        ]);

        if ($request->query->has($form->getName())) {
            $form->submit($request->query->get($form->getName()));

            if($form->isSubmitted() && $form->isValid()){
                $search = $form->getData();

                $menuManager   = $this->container->get('app.menu_manager');
                $recipeManager = $this->container->get('app.recipe_manager');

                $searchMenus    = $menuManager->getMenuBySearch($search);
                $searchRecipes = $recipeManager->getRecipeBySearch($search);

                return $this->render(':front:search_result.html.twig', array(
                    'form'          => $form->createView(),
                    'searchMenus'   => $searchMenus,
                    'searchRecipes' => $searchRecipes,
                ));
            }
        }


        return $this->render(':front:search_result.html.twig', array(
            'form' => $form->createView(),
//            'searchMenus'   => $searchMenus,
//            'searchRecipes' => $searchRecipes,
        ));


    }






}