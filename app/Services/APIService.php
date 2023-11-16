<?php

namespace App\Services;

use GuzzleHttp\Client;

class APIService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function makeAPIRequest()
    {
        $response = $this->client->get('https://jsonplaceholder.typicode.com/users');

        return $response->getBody()->getContents();
    }
}