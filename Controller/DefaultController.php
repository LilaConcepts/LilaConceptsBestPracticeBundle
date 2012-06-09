<?php

namespace Lila\Bundle\BestPracticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LilaBestPracticeBundle:Default:index.html.twig', array('name' => $name));
    }
}
