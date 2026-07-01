<?php

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function testProductPrice()
    {
        $product = new Product("Laptop", 1000);

        $this->assertEquals(1000, $product->getPrice());
    }

    public function testProductName()
    {
        $product = new Product("iPhone", 1200);

        $this->assertEquals("iPhone", $product->getName());
    }
}