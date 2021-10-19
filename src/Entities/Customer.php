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
    /**
     * @var string
     */
    private string $endpoint = 'customers';

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
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
            $queryString = '?';
            if($options) {
                foreach($options as $key => $value) {
                    if($queryString !== '?') $queryString .= '&';
                    $queryString .= $key . '=' . $value;
                }
            }
            $request = $this->httpClient->get($this->endpoint . $queryString);
            $result = json_decode($request->getBody());
        } catch(Exception $ex) {
            // TODO: log request
            throw new Exception($ex->getMessage());
        }

        return $result;
    }
}
