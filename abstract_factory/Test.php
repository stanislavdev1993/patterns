<?php

namespace abstract_factory;

use abstract_factory\factories\DoorFactoryInterface;

class Test
{
    protected $factory;

    public function __construct(DoorFactoryInterface $doorFactory)
    {
        $this->factory = $doorFactory;
    }

    public function test()
    {
        $door = $this->factory->makeDoor();
        $expert = $this->factory->makeFittingExpert();

        echo $door->getDescription();
        echo $expert->getDescription();
    }
}