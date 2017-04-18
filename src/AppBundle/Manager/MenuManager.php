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

    public function getRandomMenus($limit = 10)
    {
        return $this->getRepository()->getRandomMenus($limit);
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