<?php

namespace LilaConcepts\Bundle\LilaConceptsBestPracticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LilaConceptsBestPracticeBundle:Default:index.html.twig', array('name' => $name));
    }
}
