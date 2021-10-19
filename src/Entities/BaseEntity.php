<?php

namespace WebDEV\B2BWave\Entities;

use GuzzleHttp\Client;

/**
 * Class BaseEntity
 *
 * @package WebDEV\B2BWave
 */
class BaseEntity
{
    /**
     * @var Client
     */
    public Client $httpClient;

    /**
     * @var string|null
     */
    public string $api;

    /**
     * @var string|null
     */
    public string $token;

    /**
     * Constructor
     */
    public function __construct() {
        $this->url = config('b2bwave.url');
        $this->token = config('b2bwave.token');

        if(!$this->url || !$this->token) {
            throw new Exception("Wrong B2BWave configuration.");
        }

        $this->httpClient = new Client([
            'base_uri' => $this->url,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
    }
}
