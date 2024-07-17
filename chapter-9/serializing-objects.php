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
}

$manager = new Manager('Rajesh Budhathoki');
$sales = new Department('Sales');
$sales->manager = $manager;

$ser = serialize($sales);
dump($ser);

$unSer = unserialize($ser);
$unSer->manager->name = 'Anu G';
dump($sales, $unSer);

$deepCopy = unserialize(serialize($sales));
dump($deepCopy, $deepCopy === $sales);
