<?php
require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

//$book = new PhysicalBook('Hamlet', 500);
//print $book->getTitle() . PHP_EOL;
//print $book->write() . PHP_EOL;

$digitalBook = new DigitalBook('Grapes of Wrath', 2);
print $digitalBook->write() . PHP_EOL;
