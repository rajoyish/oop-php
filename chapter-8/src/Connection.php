<?php

namespace App;

class Connection
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            echo 'Creating instance...'.PHP_EOL;
            self::$instance = new self();
        }

        return self::$instance;
    }
}
