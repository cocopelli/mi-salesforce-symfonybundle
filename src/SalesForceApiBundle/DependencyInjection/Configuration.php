<?php

namespace Mi\SalesforceApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('salesforce_api');

        $rootNode
            ->children()
            ->scalarNode('username')
            ->isRequired()
            ->end()
            ->scalarNode('password')
            ->isRequired()
            ->end()
            ->scalarNode('token')
            ->isRequired()
            ->end()
            ->end();

        return $treeBuilder;
    }
}