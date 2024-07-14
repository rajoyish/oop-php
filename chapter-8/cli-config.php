<?php

use App\MySQL\Connection;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require_once 'vendor/autoload.php';

$conn = Connection::getInstance();

ConsoleRunner::run(new SingleManagerProvider($conn->getEntityManager()));
