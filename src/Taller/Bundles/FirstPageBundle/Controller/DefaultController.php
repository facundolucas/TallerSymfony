<?php

namespace Taller\Bundles\FirstPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('FirstBundle::layout.html.twig');
        //return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function sayHelloAction($name, $_format)
    {

        if ($_format == 'json') {
          $response = new Response(json_encode(array('name' => $name)));
          $response->headers->set('Content-Type', 'application/json');
          return $response;
        }


        return $this->render('FirstBundle:Default:index.'.$_format.'.twig', array('name' => $name));
    }

    public function seccion1Action()
    {
        return $this->render('FirstBundle::seccion1.html.twig');
        //return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function seccion2Action()
    {
        return $this->render('FirstBundle::seccion2.html.twig');
        //return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function seccion3Action()
    {
        return $this->render('FirstBundle::seccion3.html.twig');
        //return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function UsuariosAction() {
        $usuarios[] = array("nombre" => "pepe");
        $usuarios[] = array("nombre" => "john");
        $usuarios[] = array("nombre" => "peter");
        return $this->render('FirstBundle::usuarios.html.twig', array('usuarios' => $usuarios));
}

}
