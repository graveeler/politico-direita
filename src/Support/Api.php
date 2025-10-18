<?php

use GuzzleHttp\Client;

class Api
{
    private string $token;

    private string $domain;

    private string $ip;

    function __construct()
    {
        $this->token = API['token'];
        $this->domain = API['domain'];

        $this->ip = $_SERVER['REMOTE_ADDR'] ?? null;
    }

    function uri(string $uri)
    {
        $client = new Client();

        $client->request('POST', $this->domain . "/" . $uri, [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ]
        ]);
    }

    function domainAccess(string $uri)
    {
        $client = new Client();

        $client->request('POST', $this->domain . "/domain-access", [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ]
        ]);
    }

    function checkout(string $uri)
    {
        $client = new Client();

        $client->request('POST', $this->domain . "/checkout", [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ]
        ]);
    }

    function contact($data)
    {
        $client = new Client();

        $res = $client->request('POST', $this->domain . "/contact", [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ],
            'form_params' => [
                'name' => $data['name'],
                'subject' => $data['subject'],
                'message' => $data['message'],
                'email' => $data['email']
            ]
        ]);

        return $res->getBody();
    }

    function leads($data)
    {
        $client = new Client();

        $client->request('POST', $this->domain . "/lead", [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ],
            'form_params' => [
                'name' => $data['name'],
                'whatsapp' => $data['whatsapp'],
                'email' => $data['email']
            ]
        ]);
    }

    function user()
    {
        $client = new Client();

        $res = $client->request('GET', $this->domain . "/user", [
            'headers' => [
                'token' => $this->token,
                'ip' => $this->ip
            ]
        ]);

        return $res->getBody();
    }
}
