<?php

namespace fabric_method\managers;

use fabric_method\products\Milk;
use fabric_method\products\ProductInterface;

class MilkManager extends ProductManager
{
    public function createProduct(float $price): ProductInterface
    {
        return new Milk($price);
    }
}