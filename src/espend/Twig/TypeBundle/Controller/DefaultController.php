<?php

namespace espend\Twig\TypeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $car = $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car')->find(1);
        $cars = $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car')->findAll();

        return $this->render('espendTwigTypeBundle:Default:index.html.twig', array(
            'name' => 'foo',
            'car' => $car,
            'cars' => $cars,
        ));

    }
}
