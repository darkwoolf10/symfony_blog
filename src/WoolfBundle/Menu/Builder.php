<?php

namespace WoolfBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu
            ->addChild('Home', ['route' => 'homepage'])
            ->setAttributes([
                'class' => 'list-group-item list-group-item-action text-center'
            ])
        ;
        $menu
            ->addChild('About Me', ['route' => 'about'])
            ->setAttributes([
                'class' => 'list-group-item list-group-item-action text-center'
            ])
        ;
        $menu
            ->addChild('Feedback', ['route' => 'feadback'])
            ->setAttributes([
                'class' => 'list-group-item list-group-item-action text-center'
            ])
        ;
        $menu
            ->addChild('Account')
            ->setAttributes([
                'class' => 'list-group-item list-group-item-action text-center'
            ])
        ;
        // you can also add sub level's to your menu's as follows

        return $menu;
    }
}