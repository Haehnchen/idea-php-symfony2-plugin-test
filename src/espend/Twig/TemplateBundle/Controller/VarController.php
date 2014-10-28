<?php

namespace espend\Twig\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VarController extends Controller
{
    public function indexAction($name)
    {
        return array(
            'bikes' => $this->container->get('doctrine')->getManager()->getRepository('espendDoctrineModelBundle:Bike')->findAll(),
        );
    }
}
