<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EPEpapetrieBundle:Default:index.html.twig', array('name' => $name));
    }
}
