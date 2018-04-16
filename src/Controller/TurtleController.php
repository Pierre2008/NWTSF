<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TurtleController extends Controller
{
    /**
     * @Route ("turtle/crier")
     */

    public function crier ()
    {
        return new Response( '<body><h1>Je stridule !!!</h1></body>');
    }


    /**
     * @Route("/turtle", name="turtle")
     */


    public function index()
    {
        return $this->render('turtle/index.html.twig', [
            'controller_name' => 'TurtleController',
        ]);
    }
}
