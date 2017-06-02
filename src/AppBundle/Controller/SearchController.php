<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Search;
use AppBundle\Form\SearchNavType;
use AppBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    private function createNavSearchForm()
    {
        return $this->createForm(SearchNavType::class, null, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET',
        ]);
    }

    public function createNavSearchFormAction()
    {
        $navForm = $this->createNavSearchForm();

        return $this->render(':include:_search_form_header.html.twig', [
            'form' => $navForm->createView(),
        ]);
    }

    /**
     * @Route("/search-result", name="app_search_results", methods={"GET"})
     */
    public function searchResultsAction(Request $request)
    {
        $menuManager = $this->container->get('app.menu_manager');
        $recipeManager = $this->container->get('app.recipe_manager');

        $search = new Search();

        $form = $this->createForm(SearchType::class, $search, [
            'action' => $this->generateUrl('app_search_results'),
            'method' => 'GET',
        ]);

        $form->handleRequest($request);

        $navForm = $this->createNavSearchForm();

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData();

            $searchMenus = $menuManager->getMenuBySearch($search);
            $searchRecipes = $recipeManager->getRecipeBySearch($search);

            return $this->render(':front:search_result.html.twig', [
                'form' => $form->createView(),
                'searchMenus' => $searchMenus,
                'searchRecipes' => $searchRecipes,
                'search' => $form->getData(),
            ]);
        }

        if ($request->query->has($navForm->getName())) {
            $navForm->submit($request->query->get($navForm->getName()));

            if ($navForm->isSubmitted() && $navForm->isValid()) {
                $search = $navForm->getData();

                $form->setData($search);

                $searchMenus = $menuManager->getMenuBySearch($search);
                $searchRecipes = $recipeManager->getRecipeBySearch($search);

                return $this->render(':front:search_result.html.twig', [
                    'form' => $form->createView(),
                    'searchMenus' => $searchMenus,
                    'searchRecipes' => $searchRecipes,
                ]);
            }
        }

        return $this->render(':front:search_result.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
