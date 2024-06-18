<?php
require_once 'Connection.php';

$connection = new Connection();
print Connection::getCount() . PHP_EOL;

$connection2 = new Connection();
print Connection::getCount() . PHP_EOL;
