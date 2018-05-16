<?php

namespace adapter;

class Test
{
    public function test()
    {
        $hunter = new Hunter();
        $lion1 = new AfricanLion();
        $lion2 = new AsianLion();
        $wildDog = new WildDogAdapter(new WildDog());

        $hunter->hunt($lion1);
        $hunter->hunt($lion2);
        $hunter->hunt($wildDog);

        echo 'Hunted';
    }
}