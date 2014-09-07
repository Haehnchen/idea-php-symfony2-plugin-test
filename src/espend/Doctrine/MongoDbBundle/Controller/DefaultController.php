<?php

namespace espend\Doctrine\MongoDbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        // yaml
        $this->getDoctrine()->getRepository('espendDoctrineMongoDbBundle:MongoYaml')->findOneBy(array(
            'id' => 'foo',
        ));

        $this->getDoctrine()->getRepository('espendDoctrineMongoDbBundle:MongoYaml')->findAllOrderedByName();

        // annotation
        $this->getDoctrine()->getRepository('espendDoctrineMongoDbBundle:MongoAnnotation')->findOneBy(array(
            'name' => '', # <- @TODO
        ));

        $this->getDoctrine()->getRepository('espendDoctrineMongoDbBundle:MongoAnnotation')->findAllOrderedByName();

        // weak
        $this->getDoctrine()->getRepository('espendDoctrineMongoDbWeakBundle:MongoWeak')->findAllOrderedByName();
        $this->getDoctrine()->getRepository('espendDoctrineMongoDbWeakBundle:MongoYamlWeak')->findAllOrderedByName();
        $this->getDoctrine()->getRepository('espendDoctrineMongoDbWeakBundle:MongoYamlWeak')->findOneBy(array(
           'name' => 'foo'
        ));

        $this->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('espendDoctrineMongoDbWeakBundle:MongoYamlWeak')->findAllOrderedByName();

        return array();
    }
}
