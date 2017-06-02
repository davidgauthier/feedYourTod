<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PhotoRecipe.
 *
 * @ORM\Table(name="photo_recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRecipeRepository")
 */
class PhotoRecipe
{
    const SERVER_PATH_TO_IMAGE_FOLDER = 'uploads/photoRecipes';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=255)
     * @Assert\NotBlank(
     *     message="Please upload an image file",
     *     groups={"Create"}
     * )
     * @Assert\File(mimeTypes={"image/png", "image/jpg", "image/jpeg"})
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="legend", type="string", length=255)
     */
    private $legend;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Recipe", cascade={"persist"}, inversedBy="photoRecipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    private $oldSrc;

    /**
     * @return mixed
     */
    public function getOldSrc()
    {
        return $this->oldSrc;
    }

    /**
     * @param mixed $oldSrc
     */
    public function setOldSrc($oldSrc)
    {
        $this->oldSrc = $oldSrc;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set src.
     *
     * @param string $src
     *
     * @return PhotoRecipe
     */
    public function setSrc($src)
    {
        $this->setOldSrc($this->getSrc());
        $this->src = $src;

        return $this;
    }

    /**
     * Get src.
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set legend.
     *
     * @param string $legend
     *
     * @return PhotoRecipe
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * Get legend.
     *
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return ''.$this->getId();
    }

    /**
     * Set recipe.
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return PhotoRecipe
     */
    public function setRecipe(\AppBundle\Entity\Recipe $recipe)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe.
     *
     * @return \AppBundle\Entity\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

//    public function getWebPath(){
//        return $this->getSrc();
//    }
    public function getAbsolutePath()
    {
        return null === $this->src ? null : $this->getUploadRootDir().'/'.$this->src;
    }

    public function getWebPath()
    {
        return null === $this->src ? null : $this->getUploadDir().'/'.$this->src;
    }

    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return self::SERVER_PATH_TO_IMAGE_FOLDER;
    }
}
