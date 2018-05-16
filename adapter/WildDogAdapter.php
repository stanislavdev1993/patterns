<?php

namespace adapter;

class WildDogAdapter implements LionInterface
{
    protected $wildDog;

    public function __construct(WildDog $wildDog)
    {
        $this->wildDog = $wildDog;
    }

    public function roar()
    {
        $this->wildDog->bark();
    }
}