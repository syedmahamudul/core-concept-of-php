<?php

namespace App\Payments;

use App\Contracts\PaymentGateway;

class CashOnDelivery implements PaymentGateway
{
    public function pay(float $amount): bool
    {
        echo "Cash On Delivery<br>";

        return true;
    }
}