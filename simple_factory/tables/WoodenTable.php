<?php

namespace simple_factory\tables;

class WoodenTable implements TableInterface
{
    protected $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}