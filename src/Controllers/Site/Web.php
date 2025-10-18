<?php

namespace Source\Controllers\Site;

use GuzzleHttp\Client;
use NTTech\Router\Router;
use Source\Controllers\Controller;

class Web extends Controller
{
    protected Router $route;

    private string $ip;

    public function __construct(Router $route)
    {
        parent::__construct($route, "/templates");

        $this->route = $route;

        $this->ip = $_SERVER['REMOTE_ADDR'];

        $client = new Client();

        $client->request('POST', 'https://dashboard.mundauvalley.com/api/domain-access', [
            'headers' => [
                'token' => DOMAIN_TOKEN,
                'ip' => $this->ip
            ]
        ]);
    }

    public function home()
    {
        echo $this->view->render('home', [
            "title" => "Home | " . SERVER_NAME
        ]);
    }

    function contact()
    {
        echo $this->view->render('contact', [
            "title" => "Contatos | " . SERVER_NAME,
            "header" => "Contato"
        ]);
    }

    function events()
    {
        echo $this->view->render('events', [
            "title" => "Eventos | " . SERVER_NAME,
            "header" => "Eventos"

        ]);
    }

    function services()
    {
        echo $this->view->render('services', [
            "title" => "Eventos | " . SERVER_NAME,
            "header" => "Serviços"
        ]);
    }

    function servicesDetails($data)
    {
        echo $this->view->render($data . 'services-details', [
            "title" => "Eventos | " . SERVER_NAME,
            "subHeader" => "services",
            "header" => "Serviços"
        ]);
    }

    function proposals()
    {
        echo $this->view->render('proposals', [
            "title" => "Propostas | " . SERVER_NAME,
            "header" => "Propostas"
        ]);
    }

    function about()
    {
        echo $this->view->render('about', [
            "title" => "Sobre | " . SERVER_NAME,
            "header" => "Sobre nós"
        ]);
    }

    function team()
    {
        echo $this->view->render('team', [
            "title" => "Equipe | " . SERVER_NAME
        ]);
    }

    function faq()
    {
        echo $this->view->render('faq', [
            "title" => "FAQ | " . SERVER_NAME,
            "header" => "FAQ"
        ]);
    }

    function plans()
    {
        echo $this->view->render('plans', [
            "title" => "Planos | " . SERVER_NAME,
            "header" => "Planos"
        ]);
    }

    function blog()
    {
        echo $this->view->render('blog', [
            "title" => "Blog | " . SERVER_NAME
        ]);
    }

    function post()
    {
        echo $this->view->render('post', [
            "title" => "Post | " . SERVER_NAME
        ]);
    }

    public function debug()
    {
        echo $this->view->render('debug', [
            "title" => "Debug | " . SERVER_NAME
        ]);
    }

    public function allSections()
    {
        echo $this->view->render('all-sections', [
            "title" => "All Sections | " . SERVER_NAME
        ]);
    }
}
