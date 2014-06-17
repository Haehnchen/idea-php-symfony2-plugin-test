<?php

namespace espend\Container\ServiceWeakBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        // type provider should match on all
        $this->container->get('espend_container_service.yaml')->publicMethod();
        $this->container->get('espend_container_service_weak.xml.weak_class')->weakPublicMethod();
        $this->container->get('espend_container_service_weak.xml.weak_class')->weakPublicMethodHint($this->container);
        $this->get('espend_container_service.yaml')->publicMethod();
        $this->get('espend_container_service_weak.xml.weak_class')->weakPublicMethodHint($this->container);

        // should navigate to class
        $this->container->get('espend_container_service.yaml');

        // should navigate to class
        $this->container->get('espend_container_service.xml');

        // should annotate weak and goto class
        $this->container->get('espend_container_service_weak.xml.weak_class');

        // should annotate weak and not provide completion because of private
        $this->container->get('espend_container_service_weak.yml.weak_class_non_public');

        // reflect all service calls
        $this->container->has('espend_container_service.yaml');
        $this->container->set('espend_container_service.yaml', 'foo'); // <- @TODO

        // if class goto to it; @TODO also goto parameter def
        $this->container->getParameter('espend_container_service.xml.class');

        // if class goto to it; @TODO also goto parameter def
        $this->container->getParameter('espend_container_service.yaml.class');

        // reflect all parameter calls
        $this->container->hasParameter('espend_container_service.yaml.class');
        $this->container->setParameter('espend_container_service.yaml.class', 'foo');

        return $this->render('espendTranslationDomainBundle:Default:index.html.twig');
    }

    public function weakWhitespaceAction()
    {
        $this->container->get('espend_container_service_weak_whitespace.yml.weak_class');
        $this->container->getParameter('espend_container_service_weak_whitespace.yml.weak_class.class');
    }

}
