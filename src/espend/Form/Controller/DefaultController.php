<?php

namespace espend\Form\TypeBundle\Controller;

use espend\Form\TypeBundle\Form\WeakFooType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DefaultController extends Controller {

    public function indexAction() {

        $this->container->get('doctrine_mongodb.odm.default_connection')

        $this->get('form.factory')->createNamedBuilder('', '', '', array(
           'csrf_field_name' => null,
        ));

        $this->get('form.factory')->createNamedBuilder('', 'file');

        $this->createForm(new FileType(), null, array(
           'multiple' => true,
        ));

        $this->createForm('file', null, array(
            'multiple' => true,
        ));

        $this->createForm(new WeakFooType(), '', array(
           'pro' => 'foo',
        ));

    }

}