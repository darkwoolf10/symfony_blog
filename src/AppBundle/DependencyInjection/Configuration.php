<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('woolf');
        $rootNode
            ->children()
                ->integerNode('limit_article')
                    ->defaultValue(10)
                    ->min(5)
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}