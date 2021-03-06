<?php

namespace WoolfBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WoolfExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('woolf.limit_article', $config['limit_article']);
        $container->setParameter('woolf.limit_comment', $config['limit_comment']);
    }
}