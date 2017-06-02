<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/04/2017
 * Time: 16:16.
 */

namespace AppBundle\Doctrine\Listener;

use AppBundle\Entity\PhotoRecipe;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Filesystem\Filesystem;

class PhotoRecipeListener
{
    private $photoRecipeDirectory;

    public function __construct($photoRecipeDirectory)
    {
        $this->photoRecipeDirectory = $photoRecipeDirectory;
    }

    public function preRemove(LifecycleEventArgs $event)
    {
        $entity = $event->getObject();
        $fs = new Filesystem();
        if ($entity instanceof PhotoRecipe) {
            //            dump($this->photoRecipeDirectory.'/'.$entity->getSrc());exit();
            if ($fs->exists($this->photoRecipeDirectory.'/'.$entity->getSrc())) {
                $fs->remove($this->photoRecipeDirectory.'/'.$entity->getSrc());
            }
        }
    }
}
