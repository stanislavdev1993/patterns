<?php

namespace bridge\pages;

use bridge\themes\ThemeInterface;

class About implements WebPageInterface
{
    protected $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Страница с информацией в " . $this->theme->getColor();
    }
}