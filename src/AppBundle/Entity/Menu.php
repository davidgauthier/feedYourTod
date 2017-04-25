<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * menu.
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuRepository")
 */
class Menu
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Season")
     * @ORM\JoinColumn(nullable=false)
     */
    private $season;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Recipe", cascade={"persist"}, mappedBy="menus")
     */
    private $recipes;

    /**
     * @var
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var
     *
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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
     * Set name.
     *
     * @param string $name
     *
     * @return menu
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
     * Set season.
     *
     * @param \AppBundle\Entity\Season $season
     *
     * @return Menu
     */
    public function setSeason(\AppBundle\Entity\Season $season)
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
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recipes = new ArrayCollection();
    }

    /**
     * Add recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return Menu
     */
    public function addRecipe(\AppBundle\Entity\Recipe $recipe)
    {
        $this->getRecipes()->add($recipe);
        $recipe->addMenu($this);
        $this->computeRecipeMaxAge();

        return $this;
    }

    private function computeRecipeMaxAge()
    {
        $maxAge = 0;

        foreach ($this->getRecipes() as $recipe) {
            /** @var Recipe $recipe */
            if ($recipe->getAge() >= $maxAge) {
                $maxAge = $recipe->getAge();
            }
        }

        $this->setAge($maxAge);
    }

    /**
     * Remove recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return Menu
     */
    public function removeRecipe(\AppBundle\Entity\Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);

        if($recipe->getAge() === $this->getAge()){
            $this->computeRecipeMaxAge();
        }

        return $this;
    }

    /**
     * Get recipes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecipes()
    {
        return $this->recipes;
    }
}
