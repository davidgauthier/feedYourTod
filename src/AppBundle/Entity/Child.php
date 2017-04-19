<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Child.
 *
 * @ORM\Table(name="child")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChildRepository")
 */
class Child
{
    const STATUS_OPENED = 'opened';
    const STATUS_CLOSED = 'closed';

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
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime")
     * @Assert\NotBlank
     * @Assert\DateTime
     *
     */
    private $birthDate;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ChildFood", mappedBy="child", orphanRemoval=true, cascade={"persist"})
     */
    private $childFoods;

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
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Child
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set birthDate.
     *
     * @param \DateTime $birthDate
     *
     * @return Child
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Child
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFirstName();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->childFoods = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add childFood
     *
     * @param \AppBundle\Entity\ChildFood $childFood
     *
     * @return Child
     */
    public function addChildFood(\AppBundle\Entity\ChildFood $childFood)
    {
        $this->childFoods[] = $childFood;

        $childFood->setChild($this);

        return $this;
    }

    /**
     * Remove childFood
     *
     * @param \AppBundle\Entity\ChildFood $childFood
     */
    public function removeChildFood(\AppBundle\Entity\ChildFood $childFood)
    {
        $this->childFoods->removeElement($childFood);
    }

    /**
     * Get childFoods
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildFoods()
    {
        return $this->childFoods;
    }
}
