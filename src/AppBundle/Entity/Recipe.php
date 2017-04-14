<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Recipe.
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
     * @var RecipeType int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RecipeType")
     */
    private $recipeType;

    /**
     * @var Season int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Season")
     */
    private $season;


    /**
     * @var text
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Menu", cascade={"persist"}, inversedBy="recipes")
     */
    private $menus;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PhotoRecipe", cascade={"remove"}, mappedBy="recipe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $photoRecipes;

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
     * Set name.
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
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set recipeType.
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
     * Get recipeType.
     *
     * @return \AppBundle\Entity\RecipeType
     */
    public function getRecipeType()
    {
        return $this->recipeType;
    }

    /**
     * Set season.
     *
     * @param \AppBundle\Entity\Season $season
     *
     * @return Recipe
     */
    public function setSeason(\AppBundle\Entity\Season $season = null)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season.
     *
     * @return \AppBundle\Entity\Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set cantent
     *
     * @param string $content
     *
     * @return Recipe
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get cantent
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menus = new ArrayCollection();
    }

    /**
     * Add menu
     *
     * @param \AppBundle\Entity\Menu $menu
     *
     * @return Recipe
     */
    public function addMenu(\AppBundle\Entity\Menu $menu)
    {
        $this->menus[] = $menu;

        return $this;
    }

    /**
     * Remove menu
     *
     * @param \AppBundle\Entity\Menu $menu
     */
    public function removeMenu(\AppBundle\Entity\Menu $menu)
    {
        $this->menus->removeElement($menu);
    }

    /**
     * Get menus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Add photoRecipe
     *
     * @param \AppBundle\Entity\PhotoRecipe $photoRecipe
     *
     * @return Recipe
     */
    public function addPhotoRecipe(\AppBundle\Entity\PhotoRecipe $photoRecipe)
    {
        $this->photoRecipes[] = $photoRecipe;

        return $this;
    }

    /**
     * Remove photoRecipe
     *
     * @param \AppBundle\Entity\PhotoRecipe $photoRecipe
     */
    public function removePhotoRecipe(\AppBundle\Entity\PhotoRecipe $photoRecipe)
    {
        $this->photoRecipes->removeElement($photoRecipe);
    }

    /**
     * Get photoRecipes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotoRecipes()
    {
        return $this->photoRecipes;
    }
}
