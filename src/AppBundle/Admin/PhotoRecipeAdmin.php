<?php

// src/AppBundle/Admin/PhotoRecipeAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Image;

class PhotoRecipeAdmin extends AbstractAdmin
{
    public function getFormBuilder()
    {
        if ($this->isCurrentRoute('create')) {
            $this->formOptions = array('validation_groups' => 'Create');
        }

        $formBuilder = parent::getFormBuilder();

        return $formBuilder;
    }


    protected function configureFormFields(FormMapper $formMapper)
    {
        // the field will be added only when create an item
        if ($this->isCurrentRoute('create')) {
            $formMapper
                ->add('src', FileType::class, array(
                    'label' => 'La photo',
                ));
            $formMapper->add('legend');
            $formMapper->add('recipe');
        }

        // The field will added when current action is related acme.demo.admin.code Admin's edit form
        if ($this->isCurrentRoute('edit')) {
            // get the current Image instance
            $pr = $this->getSubject();
            $fileFieldOptions = ['required'     => false,
                                'data_class'    => null,
                                'label'         => 'La photo'];
            if ($pr) {
                // add a 'help' option containing the preview's img tag
                $fileFieldOptions['help'] = '<img src="'.'../../../../../'.$pr->getWebPath().'" class="admin-preview" style="max-height: 300px;" />';
            }

            $formMapper
                ->add('src', FileType::class, $fileFieldOptions);
            $formMapper->add('legend');
            $formMapper->add('recipe');
        }
    }

    public function prePersist($object)
    {
        $file = $object->getSrc();
        $fileName = $this->generateFileName($file);
        $file->move($this->getPhotoRecipeDirectory(), $fileName);
        $object->setSrc($fileName);
        //dump($object);exit();
    }

    public function preUpdate($object)
    {
        if($this->getPhotoRecipeDirectory().$object->getOldSrc())
        {
            $file = $object->getSrc();
            //dump($object->getOldSrc());exit();
            $fileName = $object->getOldSrc();
            if (empty($fileName)) {
                $fileName = $this->generateFileName($file);
            }


            if(null !== $file){
                $file->move($this->getPhotoRecipeDirectory(), $fileName);
                $object->setSrc($fileName);
            } else {
                $object->setSrc($fileName);
            }

        }

    }

    private function generateFileName($file){
        return md5(uniqid()).'.'.$file->guessExtension();
    }

    private function getPhotoRecipeDirectory(){
        return $this->getConfigurationPool()->getContainer()->getParameter('photo_recipe_directory');
    }



    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
//        $datagridMapper->add('src', 'text', array());
        $datagridMapper->add('legend');
        $datagridMapper->add('recipe');
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('src', 'text');
        $listMapper->add('legend');
        $listMapper->add('recipe');
        $listMapper->add('preview', null, array('template' => 'AppBundle:SonataAdmin:list_image_photo_recipe.html.twig'));
    }
}
