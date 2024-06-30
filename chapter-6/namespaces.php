<?php

use MySql\Connection;

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';

$mysqlConnection = new Connection();
print $mysqlConnection->connect() . PHP_EOL;
