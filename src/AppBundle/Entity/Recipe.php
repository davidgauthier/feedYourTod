<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe
{
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var RecipeType $recipeType int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RecipeType")
     */
    private $recipeType;

    /**
     * @var PhotoRecipe $photoRecipe int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PhotoRecipe")
     */
    private $photoRecipe;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Recipe
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set recipeType
     *
     * @param \AppBundle\Entity\RecipeType $recipeType
     *
     * @return Recipe
     */
    public function setRecipeType(\AppBundle\Entity\RecipeType $recipeType = null)
    {
        $this->recipeType = $recipeType;

        return $this;
    }

    /**
     * Get recipeType
     *
     * @return \AppBundle\Entity\RecipeType
     */
    public function getRecipeType()
    {
        return $this->recipeType;
    }

    /**
     * Set photoRecipe
     *
     * @param \AppBundle\Entity\PhotoRecipe $photoRecipe
     *
     * @return Recipe
     */
    public function setPhotoRecipe(\AppBundle\Entity\PhotoRecipe $photoRecipe = null)
    {
        $this->photoRecipe = $photoRecipe;

        return $this;
    }

    /**
     * Get photoRecipe
     *
     * @return \AppBundle\Entity\PhotoRecipe
     */
    public function getPhotoRecipe()
    {
        return $this->photoRecipe;
    }
}
