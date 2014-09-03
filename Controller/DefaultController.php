<?php

namespace BiberLtd\Bundle\GitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GitBundle:Default:index.html.twig', array('name' => $name));
    }
}
