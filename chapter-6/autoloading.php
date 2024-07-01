<?php
require_once 'autoload.php';

use Utility\Chart;

$chart = new Chart();
print $chart->draw() . PHP_EOL;

$connection = new Postgres\Connection();
print $connection->connect() . PHP_EOL;
