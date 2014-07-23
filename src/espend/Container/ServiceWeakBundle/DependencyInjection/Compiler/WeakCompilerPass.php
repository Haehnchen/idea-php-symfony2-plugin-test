<?php

namespace espend\Container\ServiceWeakBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WeakCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        $container->findTaggedServiceIds('weak_tag_yml');
    }
}