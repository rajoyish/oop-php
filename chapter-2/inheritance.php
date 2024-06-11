<?php
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000, 300);

$digitalBook = new DigitalBook('Grapes of Wrath', 'John Steinbeck', 1500, 1024);


print $physicalBook->getTitle() . PHP_EOL;
print $physicalBook->print() . PHP_EOL;
print $digitalBook->print() . PHP_EOL;
