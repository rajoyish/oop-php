<?php

use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();
dd($connection);
