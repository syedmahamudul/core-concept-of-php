<?php

require 'vendor/autoload.php';

use App\Models\Product;
use App\Models\Customer;
use App\Payments\StripePayment;
use App\Services\OrderService;

$product = new Product("iPhone 16",1200);

echo "<h2>".$product->getName()."</h2>";

echo "Price : ".$product->getPrice();

echo "<hr>";

$customer = new Customer("Mahmud");

echo "Customer : ".$customer->getName();

echo "<hr>";

$order = new OrderService();

$order->checkout(new StripePayment(),$product->getPrice());