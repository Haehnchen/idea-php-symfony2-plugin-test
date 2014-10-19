<?php

namespace espend\Container\ServiceWeakBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $this->container->get('event_dispatcher')->dispatch('kernel.request');
    }

    public function weakWhitespaceAction()
    {

    }

}
