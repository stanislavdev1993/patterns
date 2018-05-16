<?php

namespace simple_factory\tables;

class IronTable implements TableInterface
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