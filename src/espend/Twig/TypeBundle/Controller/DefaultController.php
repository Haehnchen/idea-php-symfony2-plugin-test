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

    public function quickFixAction()
    {
        $car = $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car')->find(1);
        $cars = $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car')->findAll();



        $car.not


        if (isset($car->getId())) {

        }

        print $cars;

        if (isset($cars)) {

        }

        if (isset($car['asas'])) {

        }

        $x = count($cars['as']);
        for ($i = 1; $i <= $x; $i++) {

        }

        if (isset($this->indexAction())) {

        }

        try {
            $cars;
        } catch (\Exception $e) {

        }
        if (!$cars) {

        }

        if ($cars === null) {

        }

        try {
            $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car')->findAll();
        } catch (\Exception $e) {

        }


        // should build a file which already have extends and block collected on same directory twig files
        return $this->render('espendTwigTypeBundle:Quickfix:foo2.html.twig', array(
            'name' => 'foo',
            'car' => $car,
            'cars' => $cars,
        ));
    }

}
