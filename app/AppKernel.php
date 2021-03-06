<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new espend\Translation\DomainBundle\espendTranslationDomainBundle(),
            new espend\Container\ServiceBundle\espendContainerServiceBundle(),
            new espend\Doctrine\ModelBundle\espendDoctrineModelBundle(),
            new espend\Router\RoutesBundle\espendRouterRoutesBundle(),
            new espend\Twig\TypeBundle\espendTwigTypeBundle(),
            new espend\Doctrine\RelationBundle\espendDoctrineRelationBundle(),
            new espend\Form\TypeBundle\espendFormTypeBundle(),
            new espend\Twig\TemplateBundle\espendTwigTemplateBundle(),
            new espend\Validation\ConstraintsBundle\espendValidationConstraintsBundle(),
            new Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle(),
            new espend\Doctrine\MongoDbBundle\espendDoctrineMongoDbBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
