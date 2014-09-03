<?php

namespace BiberLtd\Bundle\GitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $vendorDir =  $this->get('kernel')->getRootDir()."/../vendor";
        $client = $this->get('git.client');
        $client->clone_remote("$vendorDir/biberltd/$name/","https://github.com/biberltd/$name.git");
        return $this->render('GitBundle:Default:index.html.twig', array('result' => 'Repo succesfully cloned'));
    }
}
