<?php

namespace prototype;

class Sheep implements SheepPrototype
{
    protected $name;
    protected $category;

    public function __construct(string $name, string $category = 'Sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function clone(): Sheep
    {
        $class = get_called_class();

        return new $class($this->name, $this->category);
    }
}