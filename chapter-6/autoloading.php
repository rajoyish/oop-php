<?php

require_once 'autoload.php';

use Utility\Chart;

$chart = new Chart();
echo $chart->draw().PHP_EOL;

$connection = new Postgres\Connection();
echo $connection->connect().PHP_EOL;
