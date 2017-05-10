<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChildFoodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('childFoodTag', EntityType::class, [
                'class' => 'AppBundle\Entity\ChildFoodTag',
                'choice_label' => 'wording',
            ])
            ->add('food', EntityType::class, [
                'class' => 'AppBundle\Entity\Food',
                'choice_label' => 'wording',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\ChildFood',
        ]);
    }
}
