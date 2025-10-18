<?php

namespace Source\Controllers;

use League\Plates\Engine;
use NTTech\Router\Router;

abstract class Controller
{
    protected Router $route;

    protected Engine $view;

    public function __construct(Router $route, String $directory = null, array $globals = [])
    {
        $dir = $dir ?? dirname(__DIR__, 2) . $directory;

        $this->route = $route;

        $this->view = new Engine($dir);

        $this->view->addData(['route' => $this->route]);

        if ($globals) {
            $this->view->addData($globals); 
        }
        
    }
}
