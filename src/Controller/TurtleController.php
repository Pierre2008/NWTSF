<?php

namespace app\Controller;

use Symfony\Component\HttpFoundation\Response;

class TurtleController
{
    public function crier()
    {
        return new Response('<h1>Je stridule !!</h1>');
    }
}