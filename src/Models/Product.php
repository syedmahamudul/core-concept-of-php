<?php

namespace App\Models;

class Product
{
    private string $name;

    private float $price;

    public function __construct($name,$price)
    {
        $this->name=$name;

        $this->setPrice($price);
    }

    public function setPrice($price)
    {
        if($price<0){

            throw new \Exception("Invalid Price");
        }

        $this->price=$price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }
}