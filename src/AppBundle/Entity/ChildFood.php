<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChildFood
 *
 * @ORM\Table(name="child_food")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChildFoodRepository")
 */
class ChildFood
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Child")
     * @ORM\JoinColumn(nullable=false)
     */
    private $child;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Food")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChildFoodTag")
     * @ORM\JoinColumn(nullable=false)
     */
    private $childFoodTag;




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
     * Set child
     *
     * @param \AppBundle\Entity\Child $child
     *
     * @return ChildFood
     */
    public function setChild(\AppBundle\Entity\Child $child)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return \AppBundle\Entity\Child
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Set food
     *
     * @param \AppBundle\Entity\Food $food
     *
     * @return ChildFood
     */
    public function setFood(\AppBundle\Entity\Food $food)
    {
        $this->food = $food;

        return $this;
    }

    /**
     * Get food
     *
     * @return \AppBundle\Entity\Food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set childFoodTag
     *
     * @param \AppBundle\Entity\ChildFoodTag $childFoodTag
     *
     * @return ChildFood
     */
    public function setChildFoodTag(\AppBundle\Entity\ChildFoodTag $childFoodTag)
    {
        $this->childFoodTag = $childFoodTag;

        return $this;
    }

    /**
     * Get childFoodTag
     *
     * @return \AppBundle\Entity\ChildFoodTag
     */
    public function getChildFoodTag()
    {
        return $this->childFoodTag;
    }
}
