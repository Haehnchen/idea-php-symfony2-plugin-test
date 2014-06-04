<?php

namespace espend\Container\ServiceWeakBundle\Classes;

use Symfony\Component\DependencyInjection\ContainerInterface;

class WeakXmlClass {

    public function __construct(ContainerInterface $container) {}

    public function weakPublicMethod() { }
    protected function weakProtectedMethod() { }
    protected function weakPrivateMethod() { }

    public function weakPublicMethodHint(ContainerInterface $container) { }
} 