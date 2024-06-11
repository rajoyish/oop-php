<?php
//require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000, 300);
print $physicalBook->print() . PHP_EOL;
print $physicalBook->getTitle() . PHP_EOL;

//$digitalBook = new DigitalBook('Grapes of Wrath', 'John Steinbeck', 1500, 1024);
//print $digitalBook->print() . PHP_EOL;
//$book = new Book('Of Mice and Men', 'John Steinbeck', 200, 500);
//print $book->print() . PHP_EOL;
