<?php
require_once 'JSONFileReader.php';

$reader = new JSONFileReader();
$items = $reader->readFileAsAssociativeArray('foo.json');
print_r($items);
