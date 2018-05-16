<?php

namespace simple_factory\factories;

use simple_factory\tables\IronTable;

class TableFactory
{
    public static function createTable($color)
    {
        return new IronTable($color);
    }
}