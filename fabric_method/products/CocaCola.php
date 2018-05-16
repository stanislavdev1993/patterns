<?php

namespace fabric_method\products;

class CocaCola implements ProductInterface
{
    protected $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}