<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoodType.
 *
 * @ORM\Table(name="food_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FoodTypeRepository")
 */
class FoodType
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
     * @return FoodType
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
        return (string) $this->getWording();
    }
}
