<?php

namespace fabric_method\managers;

use fabric_method\products\CocaCola;
use fabric_method\products\ProductInterface;

class CocaColaManager extends ProductManager
{
    public function createProduct(float $price): ProductInterface
    {
        return new CocaCola($price);
    }
}