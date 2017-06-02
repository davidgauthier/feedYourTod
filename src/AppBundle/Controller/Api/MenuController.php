<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Menu;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * MenuController.
 *
 * @FOSRest\Route(path="/api/menus")
 */
class MenuController extends FOSRestController
{
    /**
     * @FOSRest\View()
     * @FOSRest\Get("/")
     *
     * @return Menu[]
     */
    public function cgetAction()
    {
        return $this->getMenuManager()->getAll();
    }

    /**
     * @return \AppBundle\Manager\MenuManager
     */
    private function getMenuManager()
    {
        return $this->get('app.menu_manager');
    }
}
