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
    public function __construct() {
        $this->customerEntity = new Customer();
    }

    /**
     * Customers entity
     * @return Customer
     */
    public function customers(): Customer {
        return $this->customerEntity;
    }
}
