<?php

namespace Source\Controllers\Site;

use GuzzleHttp\Client;
use NTTech\Router\Router;

class Request
{
    private Router $route;

    public function __construct(Router $route)
    {
        $this->route = $route;
    }

    function socialMedias() {}

    function checkout() {}
}
