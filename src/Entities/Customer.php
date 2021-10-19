<?php

namespace WebDEV\B2BWave\Entities;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

/**
 * Class Customer
 *
 * @package WebDEV\B2BWave
 * @extends BaseEntity
 */
class Customer extends BaseEntity
{
    private string $endpoint;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->endpoint = $this->url . '/customer';
        return $this;
    }

    /**
     * Search for a customer
     * @param array $options
     * @return mixed
     * @throws Exception
     */
    public function search(array $options): mixed {
        $result = [];
        try {
            $result = $this->httpClient->get($this->endpoint);
        } catch(Exception $ex) {
            // TODO: log request
            throw new Exception($ex->getMessage);
        }

        return $result;
    }
}
