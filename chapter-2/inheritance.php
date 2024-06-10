<?php
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000);
$physicalBook->price = 500;

print $physicalBook->getPrice() . PHP_EOL;