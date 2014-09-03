<?php

namespace BiberLtd\Bundle\GitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $client = $this->get('git.service');
        $result = $client->clone_remote("/path/to","https://github.com/biberltd/gitbundle.git");
        if (is_array($result)) {
            $text = '';
            foreach ($result as $item) {
                $text .= $item;
            }
        }
        return $this->render('GitBundle:Default:index.html.twig', array('result' => $text));
    }
}
