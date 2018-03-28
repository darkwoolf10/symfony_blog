<?php

namespace WoolfBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SubscribeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('email', 'text');
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('subscribe.id')
            ->add('subscribe.email')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
        ;
    }
}