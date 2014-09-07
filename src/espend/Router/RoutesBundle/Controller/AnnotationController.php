<?php

namespace espend\Router\RoutesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use espend\Router\RoutesBundle\Statics\AnnotationStaticClass;
use Symfony\Component\Validator\Constraints\All;

class AnnotationController extends Controller
{

    const TEST = 'ss';



    /**
     * @Route(AnnotationStaticClass::FOO)
     */
    public function indexAction()
    {
        return new Response("foo");
    }


}
