<?php

namespace AppBundle\Controller;

use AppBundle\Form\SearchNavType;
use AppBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{

    private function createNavSearchForm(){
        return $this->createForm(SearchNavType::class, null, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET'
        ]);
    }


    public function createNavSearchFormAction(Request $request)
    {
        $navForm = $this->createNavSearchForm();

        return $this->render(':include:_search_form_header.html.twig', array(
            'form' => $navForm->createView(),
        ));
    }


    /**
     *
     * @Route("/search-result", name="app_search_results", methods={"GET"})
     */
    public function searchResultsAction(Request $request)
    {
        $menuManager   = $this->container->get('app.menu_manager');
        $recipeManager = $this->container->get('app.recipe_manager');

        $form = $this->createForm(SearchType::class, null, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET'
        ]);

        $navForm = $this->createNavSearchForm();

        if ($request->query->has($form->getName())) {
            $form->submit($request->query->get($form->getName()));

            if($form->isSubmitted() && $form->isValid()){
                $search = $form->getData();

                $searchMenus    = $menuManager->getMenuBySearch($search);
                $searchRecipes  = $recipeManager->getRecipeBySearch($search);

                return $this->render(':front:search_result.html.twig', array(
                    'form'          => $form->createView(),
                    'searchMenus'   => $searchMenus,
                    'searchRecipes' => $searchRecipes,
                ));
            }
        }


        if ($request->query->has($navForm->getName())) {
            $navForm->submit($request->query->get($navForm->getName()));

            if($navForm->isSubmitted() && $navForm->isValid()){
                $search = $navForm->getData();

                $form->setData($search);

                $searchMenus    = $menuManager->getMenuBySearch($search);
                $searchRecipes  = $recipeManager->getRecipeBySearch($search);

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