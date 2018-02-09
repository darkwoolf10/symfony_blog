<?php

namespace WoolfBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Posts', ['class' => 'col-md-9'])
            ->add('title', 'text')
            ->add('content', 'textarea')
            ->end()
            ->with('Meta data', ['class' => 'col-md-3'])
                ->add('category', 'sonata_type_model', [
                    'class' => 'AppBundle\Entity\Category',
                    'property' => 'name',
                ])
            ->end()
        ;
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft', "boolean")
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('category', null, [], 'entity', [
                'class'    => 'AppBundle\Entity\Category',
                'choice_label' => 'name', // In Symfony2: 'property' => 'name'
            ])
            ->add('content')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Post
            ? $object->getTitle()
            : 'Post'; // shown in the breadcrumb on the create view
    }
}