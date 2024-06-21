<?php
require_once 'Book.php';
$book = new Book();
$book->setId(123);
$book->setName('The Pragmatic Programmer');
$book->printIdentity();
