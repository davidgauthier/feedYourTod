<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChildFoodTag.
 *
 * @ORM\Table(name="child_food_tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChildFoodTagRepository")
 */
class ChildFoodTag
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
     * @ORM\Column(name="wording", type="string", length=255)
     */
    private $wording;

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
     * Set wording.
     *
     * @param string $wording
     *
     * @return ChildFoodTag
     */
    public function setWording($wording)
    {
        $this->wording = $wording;

        return $this;
    }

    /**
     * Get wording.
     *
     * @return string
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getWording();
    }
}
