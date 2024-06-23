<?php
require_once 'JSONFileReader.php';

try {
	$reader = new JSONFileReader();
	// $items = $reader->readFileAsAssociativeArray('inventory.json');
	$items = $reader->readFileAsAssociativeArray('foo.json');
	print_r($items);
} catch (Exception $exception) {
	print $exception->getMessage() . PHP_EOL;
}
