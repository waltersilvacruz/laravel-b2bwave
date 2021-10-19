<?php

namespace WebDEV\B2BWave\Services;

use WebDEV\B2BWave\Entities\Customer;

/**
 * Class B2BWaveClient
 *
 * @package WebDEV\B2BWave
 */
class B2BWaveClient
{
    /**
     * @var Customer
     */
    private Customer $customerEntity;

    /**
     * Constructor
     */
    public function __construct() {}

    /**
     * Customers entity
     * @return Customer
     */
    public function customers(): Customer {
        if(empty($this->customerEntity)) {
            $this->customerEntity = new Customer();
        }
        return $this->customerEntity;
    }
}
