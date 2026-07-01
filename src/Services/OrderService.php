<?php

namespace App\Services;

use App\Contracts\PaymentGateway;
use App\Traits\Logger;

class OrderService
{
    use Logger;

  public function checkout(PaymentGateway $payment, float $amount): bool
{
    $this->log("Checkout Started");

    $result = $payment->pay($amount);

    $this->log("Order Completed");

    return $result;
}
}