<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ChildFoodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('childFoodTag', EntityType::class, [
                'class'         => 'AppBundle\Entity\ChildFoodTag',
                'choice_label'  => 'wording',
            ])
            ->add('food', EntityType::class, [
                'class'         => 'AppBundle\Entity\Food',
                'choice_label'  => 'wording',
            ])

        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ChildFood',

        ));
    }
}