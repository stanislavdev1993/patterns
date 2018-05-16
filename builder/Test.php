<?php

namespace builder;

class Test
{
    protected $builder;

    public function __construct(BurgerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function test()
    {
        $burger = $this->builder
            ->addCheese()
            ->addLettuce()
            ->addPepperoni()
            ->build();

        return $burger;
    }
}