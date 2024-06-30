<?php
require_once 'MySQL/Connection.php';
require_once 'Postgres/Connection.php';

use MySQL\Connection as MySQLConnection;
use Postgres\Connection as PostgresConnection;


$mysqlConnection = new MySQLConnection();
print $mysqlConnection->connect() . PHP_EOL;

$postgresqlConnection = new PostgresConnection();
print $postgresqlConnection->connect() . PHP_EOL;
