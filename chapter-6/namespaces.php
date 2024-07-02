<?php

require_once 'MySQL/Connection.php';
require_once 'Postgres/Connection.php';

use MySQL\Connection as MySQLConnection;
use Postgres\Connection as PostgresConnection;

$mysqlConnection = new MySQLConnection();
echo $mysqlConnection->connect().PHP_EOL;

$postgresqlConnection = new PostgresConnection();
echo $postgresqlConnection->connect().PHP_EOL;
