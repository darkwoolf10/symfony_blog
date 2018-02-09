<?php

namespace WoolfBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\DependencyInjection\ContainerInterface;
use WoolfBundle\Entity\User;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text')
            ->add('email', 'email')
            ->add('plainPassword', 'text')
            ->add('roles','choice', [
                    'choices'=>[
                        'Admin' => 'ROLE_ADMIN',
                        'User' => 'ROLE_USER',
                    ],
                    'multiple'=>true,
                    'expanded' => true,
                ]
            )
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('roles')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('roles', 'array');
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function prePersist($user)
    {
        $user->setPassword($this->encodePassword($user, $user->getPlainPassword()));
    }

    public function preUpdate($user)
    {
        $user->setPassword($this->encodePassword($user, $user->getPlainPassword()));
    }

    private function encodePassword($user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        return $encoder->encodePassword($plainPassword, $user);
    }

}