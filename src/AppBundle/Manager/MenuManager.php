<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Menu;

class MenuManager extends AbstractDoctrineManager
{



    public function getListMenus()
    {
        return $this->getRepository()->getListMenus();
    }

    /**
     * @return Menu
     */
    public function getMenuById($id)
    {
//        return $this->entityManager->getRepository(Menu::class)->findOneById($id);
        return $this->getRepository()->getMenuById($id);
    }




    /**
     * @return Menu
     */
    public function create()
    {
        return new Menu();
    }

    /**
     * @return \AppBundle\Repository\MenuRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository(Menu::class);
    }

}