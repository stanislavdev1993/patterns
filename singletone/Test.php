<?php

namespace singleton;

class Test
{
    public function test()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        echo $president1 === $president2;
    }
}