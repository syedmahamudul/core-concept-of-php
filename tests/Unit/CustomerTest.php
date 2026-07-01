<?php

use PHPUnit\Framework\TestCase;
use App\Models\Customer;

class CustomerTest extends TestCase
{
    public function testCustomerName()
    {
        $customer = new Customer("Mahmud");

        $this->assertEquals("Mahmud", $customer->getName());
    }
}