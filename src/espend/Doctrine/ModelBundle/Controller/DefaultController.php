<?php

namespace espend\Doctrine\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexYamlAction()
    {

        // repository
        $this->get('doctrine')->getRepository('espendDoctrineModelBundle:Car');
        $this->getDoctrine()->getRepository('espendDoctrineModelBundle:Car');
        $this->getDoctrine()->getManager()->getRepository('espendDoctrineModelBundle:Car');

        // TODO
        //$em->getClassMetadata();

        $em = $this->getDoctrine()->getManager();

        // repository resolve
        $em->getRepository('espendDoctrineModelBundle:Car')->getFoo();
        $em->getRepository('espendDoctrineModelBundle:Car')->createQueryBuilder('car');

        // type provider
        $em->find('espendDoctrineModelBundle:Car', 1)->getId();
        $em->getRepository('espendDoctrineModelBundle:Car')->find(1)->getId();
        $em->getRepository('espendDoctrineModelBundle:Car')->findOneBy(array())->getId();
        $em->getRepository('espendDoctrineModelBundle:Car')->findBy(array())[0]->getId();
        //$em->getRepository('espendDoctrineModelBundle:Car')->findAll(array())[0]->getId(); // <- @TODO

        // parameter
        $em->getRepository('espendDoctrineModelBundle:Car')->findOneBy(array(
            'id' => 1,
        ));

        return array();
    }

    public function indexAnnotationAction()
    {

        // repository
        $this->get('doctrine')->getRepository('espendDoctrineModelBundle:Bike');

        $em = $this->getDoctrine()->getManager();

        // repository resolve
        $em->getRepository('espendDoctrineModelBundle:Bike')->getFoo();

        // parameter
        $em->getRepository('espendDoctrineModelBundle:Bike')->findOneBy(array(
            'id' => 1,
        ));

        return array();
    }
}
