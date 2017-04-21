<?php

namespace AppBundle\Controller;

use AppBundle\Form\MessageContactType;
use AppBundle\Form\NewsletterSubscriberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @Route("/menus", name="app_menus", methods={"GET"})
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
     * @Route("/menu/{id}", name="app_menu", methods={"GET"})
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
     * @Route("/recipes", name="app_recipes", methods={"GET"})
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
     * @Route("/recipe/{id}", name="app_recipe", methods={"GET"})
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
     * @Route("/contact", name="app_contact")
     */
    public function contactAction(Request $request)
    {
        $messageContact = $this->container->get('app.message_contact_manager')->create();

        $form = $this->createForm(MessageContactType::class, $messageContact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $messageContact = $form->getData();

            if(null !== $this->getUser()){
                $messageContact->setUser($this->getUser());
            }

            $this->container->get('app.message_contact_manager')->save($messageContact);

            $this->get('session')->getFlashBag()->add('info', 'Votre message a bien été enregistré !');
            return $this->redirectToRoute('app_homepage');
        }

        return $this->render(':front:contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }





    //Génerer des PDFs
    /**
     * @Route("/pdf/{id}", name="app_generate_pdf")
     */
    public function returnPDFAction($id)
    {
        $recipeManager = $this->container->get("app.recipe_manager");
        $recipe = $recipeManager->getRecipeById($id);

        if($recipe == null)
        {
            throw new NotFoundHttpException("La recette recherchée n'existe pas.");

        }else {

            $html = $this->renderView(':pdf:recipepdf.html.twig', array(
                'recipe' => $recipe
            ));

            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'attachment; filename="file.pdf"'
                )
            );

            return $this->redirectToRoute('app_recipe');
        }
    }



}
