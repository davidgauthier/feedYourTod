<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MenuController extends Controller
{

    public function displayRandomMenusAction(Request $request)
    {
//        $dateTime = new \DateTime();
//        $seasonManager = $this->container->get("app.season_manager");
//        $season = $seasonManager->getCurrentSeason($dateTime);

        $mm = $this->container->get('app.menu_manager');
        $listRandomMenus = $mm->getRandomMenus(3, null);

        return $this->render(':include:_sidebar_menus.html.twig', array(
            'listRandomMenus' => $listRandomMenus,
        ));
    }

}
