<?php

namespace espend\Container\ServiceBundle\Classes;

use Symfony\Component\DependencyInjection\ContainerInterface;

class YamlClass {

    public function __construct(ContainerInterface $container) {  }

    public function publicMethod() {}
    protected function protectedMethod() {}
    private function privateMethod() {}

    public function publicMethodHint(ContainerInterface $container) {}
    public function crossHint(YamlClass $class) { }
}