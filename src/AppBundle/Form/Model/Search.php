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