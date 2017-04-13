<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhotoRecipe.
 *
 * @ORM\Table(name="photo_recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRecipeRepository")
 */
class PhotoRecipe
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
     * @ORM\Column(name="src", type="string", length=255)
     */
    private $src;

    /**
     * @var string
     *
     * @ORM\Column(name="legend", type="string", length=255)
     */
    private $legend;

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
        return "".$this->getId();
    }
}
