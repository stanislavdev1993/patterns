<?php

namespace singleton;

final class President
{
    private static $_instance;

    private function __construct(){}

    public static function getInstance(): self
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    private function __clone(){}
    private function __wakeup(){}
}