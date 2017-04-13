<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 13/04/2017
 * Time: 10:00
 */

namespace AppBundle\Manager;


use AppBundle\Entity\Menu;
use Doctrine\ORM\EntityManagerInterface;

class MenuManager
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create()
    {
        return new Menu();
    }

    public function save($menu)
    {
        if(null === $menu->getId())
        {
            $this->entityManager->persist($menu);
        }

        $this->entityManager->flush();
    }


    //MENU METHODS

    public function getListMenu()
    {
        return $this->entityManager->getRepository(Menu::class)->getListMenu();
    }

    public function getMenuById($id)
    {
        return $this->entityManager->getRepository(Menu::class)->getMenuById($id);
    }

    public function getAll(){

        $menuRep = $this->entityManager->getRepository(Menu::class);

        return $menuRep->findAll();
    }

}