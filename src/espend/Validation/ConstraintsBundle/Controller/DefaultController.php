<?php

namespace espend\Validation\ConstraintsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Range;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        new Range(array(
            'invalidMessage' => 'foo',
        ));

        new File(array(
            'mimeTypes' => 'foo',
        ));

        return Array();
    }
}
