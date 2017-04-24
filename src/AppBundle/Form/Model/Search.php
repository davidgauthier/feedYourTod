<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 20/04/2017
 * Time: 15:39
 */

namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;


class Search
{
    /**
     * @Assert\NotBlank()
     *
     *
     */
    private $keyword;

    /**
     * @var
     *
     * @Assert\Range(
     *      min = 1,
     *      max = 120,
     *      minMessage = "L'age doit être au minimum de {{ limit }} mois",
     *      maxMessage = "L'age doit être au maximum de {{ limit }} mois"
     * )
     */
    private $age;


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
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }



}