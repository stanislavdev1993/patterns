<?php

namespace bridge\pages;

use bridge\themes\ThemeInterface;

interface WebPageInterface
{
    public function __construct(ThemeInterface $theme);
    public function getContent();
}