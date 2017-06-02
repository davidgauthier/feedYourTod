<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ChildEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('firstName')
            ->remove('birthDate')
        ;
    }

    public function getParent()
    {
        return ChildType::class;
    }
}
