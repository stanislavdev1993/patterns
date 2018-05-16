<?php

namespace fabric_method;

use fabric_method\managers\ProductManager;

class Test
{
    protected $productManager;

    public function __construct(ProductManager $productManager)
    {
        $this->productManager = $productManager;
    }

    public function test()
    {
        echo $this->productManager->getProductPrice();
    }
}