<?php

namespace prototype;

class Test
{
    protected $prototype;

    public function __construct(Sheep $prototype)
    {
        $this->prototype = $prototype;
    }

    public function test()
    {
        $sheep1 = $this->prototype;

        echo $sheep1->getName();

        $sheep2 = $sheep1->clone();
        $sheep2->setName('Sheep2');

        echo $sheep2->getName();

        var_dump($sheep1);
        var_dump($sheep2);
    }
}