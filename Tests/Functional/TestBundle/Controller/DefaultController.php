<?php

namespace Lila\Bundle\BestPracticeBundle\Tests\Functional\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function homepageAction()
    {
		return $this->render('TestBundle:Default:index.html.twig');
    }
}