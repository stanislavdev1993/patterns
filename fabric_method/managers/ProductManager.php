<?php

namespace fabric_method\managers;

use fabric_method\products\ProductInterface;

abstract class ProductManager
{
    abstract public function createProduct(float $price): ProductInterface;

    public function getProductPrice()
    {
        $product = $this->createProduct(100);

        return $product->getPrice();
    }
}