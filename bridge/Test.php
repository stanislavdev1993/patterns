<?php

namespace bridge;

use bridge\pages\About;
use bridge\themes\DarkTheme;

class Test
{
    public function test()
    {
        $darkTheme = new DarkTheme();

        $about = new About($darkTheme);

        $about->getContent();
    }
}