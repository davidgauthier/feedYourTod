<?php

// src/AppBundle/Admin/RecipeAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RecipeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')
            ->add('age')
            ->add('recipeType')
            ->add('season')
            ->add('content')
            ->add('preptime')
            ->add('cooktime')
            ->add('filling', 'text', [
                'required' => FALSE,
            ])
            ->add('observation')
            ->add('menus');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('age')
            ->add('recipeType')
            ->add('season')
            ->add('content')
            ->add('preptime')
            ->add('cooktime');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name')
            ->add('age')
            ->add('recipeType')
            ->add('season')
            ->add('content')
            ->add('preptime')
            ->add('cooktime');

    }
}
