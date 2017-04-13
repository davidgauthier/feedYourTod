<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Menu;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class MenuController extends Controller
{
    /**
     * @Route("/menu", name="app_menu")
     */
    public function listAction()
    {
        $menuManager = $this->container->get("app.menu_manager");
        $menus = $menuManager->getListMenu();

        return $this->render(':menu:listMenu.html.twig', [
            'menus' => $menus,
        ]);
    }

    /**
     * @Route("/menu/{id}", name="app_menu_id")
     */
    public function menuByIdAction($id)
    {
        $menuIdManager = $this->container->get("app.menu_manager");
        $menu = $menuIdManager->getMenuById($id);

        if($menu == null)
        {
            throw new NotFoundHttpException("Le menu recherché n'existe pas");

        }else{
            return $this->render(':menu:oneMenu.html.twig',[
                'menu' => $menu,
            ]);
        }
    }
}
