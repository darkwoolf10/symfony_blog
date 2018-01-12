<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));

        // create another menu item
        $menu->addChild('About Me', ['route' => 'about']);
        // you can also add sub level's to your menu's as follows
        $menu['About Me']->addChild('Edit profile', ['route' => 'edit_profile']);

        return $menu;
    }
}