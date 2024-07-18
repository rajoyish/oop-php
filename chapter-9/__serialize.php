<?php

use App\User;

require_once 'vendor/autoload.php';

$user = new User(username: 'Milo18@yahoo.com', password: 'password11');
$serializedUser = serialize($user);

dump($serializedUser);
