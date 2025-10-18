<?php

use NTTech\Router\Router;

require "vendor/autoload.php";

$route = new Router(BASE_PATH);

$route->namespace("Source\Controllers\Site");
$route->group(null); 

$route->get("/", "Web:home", "web.home");
$route->get("/sobre", "Web:about", "web.about");
$route->get("/blog", "Web:blog", "web.blog");
$route->get("/servicos", "Web:services", "web.services");
$route->get("/servicos/landing-pages", "Web:serviceLandingpage", "web.serviceLandingpage");
$route->get("/contato", "Web:contact", "web.contact");
$route->get("/agenda", "Web:agenda", "web.agenda");
$route->get("/propostas", "Web:proposals", "web.proposals");
$route->get("/debug", "Web:debug", "web.debug");
$route->get("/all-sections", "Web:allSections", "web.allSections");
$route->get("/eventos", "Web:events", "web.events");
$route->get("/planos", "Web:plans", "web.plans");
$route->get("/faq", "Web:faq", "web.faq");
$route->get("/post", "Web:post", "web.post");

$route->dispatch();

if ($route->error()) {
    echo $route->error();
}
