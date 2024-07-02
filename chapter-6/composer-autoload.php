<?php

require_once 'vendor/autoload.php';

use App\User;
use Symfony\Component\VarDumper\VarDumper;

$data = [
    'id' => 1,
    'name' => 'Rajoyish',
];

$rajesh = new User('5', 'Rajesh');

//VarDumper::dump($data);
VarDumper::dump([$data, $rajesh]);
