<?php
require_once 'Book.php';

$physicalBook = new Book('A Random Book', 'Jane Doe', 2000);
$digitalBook = new Book('A Random Book', 'Jane Doe', 2000);

print $physicalBook->title . PHP_EOL;
print $digitalBook->title . PHP_EOL;