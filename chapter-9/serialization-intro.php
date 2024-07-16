<?php

require_once 'vendor/autoload.php';

// string
$string = serialize('this is a string');
dump($string);

// integer
$int = serialize(345);
dump($int);

$unserializedInt = unserialize($int);
dump($unserializedInt);

// floating point
$floatingPoint = serialize(345.678);
dump($floatingPoint);

// array
$array = serialize(['this', 'is', 'an', 'array', 200]);
dump($array);

// bool
$bool = serialize(false);
dump($bool);
