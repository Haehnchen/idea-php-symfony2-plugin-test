<?php

namespace espend\Doctrine\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

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

        // type provider for array
        $array = $em->getRepository('espendDoctrineModelBundle:Car')->findAll();
        foreach($array as $car) {
            $car->getId();
        }

        // parameter
        $em->getRepository('espendDoctrineModelBundle:Car')->findOneBy(array(
            'id' => 1,
        ));

        return array();
    }

    public function indexIdAction()
    {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('espendDoctrineModelBundle:Bike')->findOneBy(array(
            'field_1' => '',
            'id_1' => '',
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

    public function qbRelationAction()
    {

        // should provide goto and resolve current yaml namespace
        $qb = $this->get('doctrine')->getRepository('espendDoctrineRelationBundle:Relation')->createQueryBuilder('relation');

        $qb->join('relation.many_to_one_ns', 'manyToOneNs');
        $qb->addSelect('manyToOneNs.field_1', 'relation');

        $qb->addSelect('relation', 'manyToOneNs', '');
        $qb->addGroupBy('relation', 'relation');
        $qb->andWhere($qb->expr()->eq('relation.foo', '1'));
        $qb->andWhere($qb->expr()->eq('relation.many_to_many', '1'));

        $qb->andWhere('relation.id =>  ');


        $qb1 = $this->get('doctrine')->getRepository('espendDoctrineRelationBundle:Relation')->createQueryBuilder('relation');
        $qb1->from('espendDoctrineMongoDbBundle:MongoYaml', 'mongoYaml', 'relation.id');
    }

    public function repositoryInCurrentNamespaceAction()
    {
        $this->get('doctrine')->getRepository('espendDoctrineRelationBundle:Repo')->foo();
    }


}
