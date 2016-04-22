<?php

namespace Taller\Bundles\FirstPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }
}
