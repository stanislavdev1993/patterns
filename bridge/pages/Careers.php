<?php
namespace bridge\pages;

use bridge\themes\ThemeInterface;

class Careers implements WebPageInterface
{
    protected $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Страница карьеры в " . $this->theme->getColor();
    }
}