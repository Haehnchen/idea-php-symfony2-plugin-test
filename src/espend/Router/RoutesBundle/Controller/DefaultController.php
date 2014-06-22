<?php

namespace espend\Router\RoutesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        // should be known with parameter and should provide code folding
        $this->generateUrl('espend_router_routes_homepage', ['name' => 'foo']);

        // weak route
        $this->generateUrl('espend_router_weak_route_hash');

        // weak annotation route
        $this->generateUrl('weak_annotation');

        // weak route
        $this->generateUrl('espend_router_routes_xml_index');

        // should not be in index
        $this->generateUrl('espend_router_weak_route_invalid_index');

        return $this->render('espendRouterRoutesBundle:Default:index.html.twig');
    }

    /**
     * @Route(name="weak_annotation")
     */
    public function annotateAction($name)
    {

    }

}
