<?php

namespace espend\Twig\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('espendTwigTemplateBundle:Default:index.html.twig', array('name' => $name));
    }

    public function indexSubFolderAction()
    {

        // goto, completion, code folding
        $this->render('espendTwigTemplateBundle:Default/Folder:folder.html.twig');

        return $this->render('espendTwigTemplateBundle:Default\Folder:folder.html.twig');
    }

}
