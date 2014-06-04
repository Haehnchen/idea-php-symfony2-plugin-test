<?php

namespace espend\Translation\DomainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        // should registered in compiled file: goto, completion, annotator
        $this->container->get('translator')->trans('yaml.symfony.great', [], 'Yaml');

        // should registered in compiled file: completion, annotator
        $this->container->get('translator')->trans('yaml.symfony.great', [], 'Interchange');

        // should registered in compiled file: completion, annotator
        $this->container->get('translator')->trans('yaml.symfony.great', [], 'GetText');

        // --- weak ---

        // should valid because of indexer: goto, completion, annotator
        $this->container->get('translator')->trans('yaml_weak.symfony.great', [], 'WeakYaml');

        // not supported
        $this->container->get('translator')->trans('xlf_weak.symfony.great', [], 'WeakInterchange');

        // not supported
        $this->container->get('translator')->trans('gettext_weak.symfony.great', [], 'GetText');

        return $this->render('espendTranslationDomainBundle:Default:index.html.twig');
    }
}
