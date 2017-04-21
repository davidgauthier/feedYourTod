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
        $formMapper->add('name', 'text');
        $formMapper->add('age');
        $formMapper->add('recipeType');
        $formMapper->add('season');
        $formMapper->add('content');
        $formMapper->add('preptime');
        $formMapper->add('cooktime');
        $formMapper->add('filling', 'text', [
            'required' => FALSE,
        ]);
        $formMapper->add('observation');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('name');
        $datagridMapper->add('age');
        $datagridMapper->add('recipeType');
        $datagridMapper->add('season');
        $datagridMapper->add('content');
        $datagridMapper->add('preptime');
        $datagridMapper->add('cooktime');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('name');
        $listMapper->add('age');
        $listMapper->add('recipeType');
        $listMapper->add('season');
        $listMapper->add('content');
        $listMapper->add('preptime');
        $listMapper->add('cooktime');
    }
}
