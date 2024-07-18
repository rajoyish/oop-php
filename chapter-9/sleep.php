<?php

require_once 'vendor/autoload.php';

class Manager
{
    public function __construct(public string $name) {}
}

class Department
{
    public ?Manager $manager;

    public function __construct(public string $name) {}

    public function __sleep(): array
    {
        echo 'Sleeping...'.PHP_EOL;

        return [];
    }
}

$manager = new Manager('Manager A');

$sales = new Department('sales');
$sales->manager = $manager;

$ser = serialize($sales);

dump(unserialize($ser));
