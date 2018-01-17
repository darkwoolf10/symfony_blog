<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Post;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Post', ['class' => 'col-md-9'])
            ->add('title', 'text')
            ->add('content', 'textarea')
            ->end()
            ->with('Meta data', ['class' => 'col-md-3'])
                ->add('category', 'sonata_type_model', [
                    'class' => 'AppBundle\Entity\Category',
                    'choice_label' => 'name',
                ])
            ->end()
        ;
    }
    

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->addIdentifier('content')
            ->addIdentifier('category')
        ;
    }
}