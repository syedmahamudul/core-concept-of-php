<?php

use PHPUnit\Framework\TestCase;
use App\Services\OrderService;
use App\Payments\StripePayment;

class OrderServiceTest extends TestCase
{
    public function testCheckout()
    {
        $order = new OrderService();

        $result = $order->checkout(new StripePayment(), 500);

        $this->assertTrue($result);   // ✅ Correct
    }
}