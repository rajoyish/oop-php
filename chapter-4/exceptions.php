<?php
require_once 'JSONFileReader.php';

try {
  $reader = new JSONFileReader();
  // $items = $reader->readFileAsAssociativeArray('inventory.json');
  $items = $reader->readFileAsAssociativeArray('foo.json');
  print_r($items);
} catch (JsonException $jsonException) {
  print 'There is a problem with JSON: ' . $jsonException->getMessage() . ' on line ' . $jsonException->getLine() . ' in file ' . $jsonException->getFile() . PHP_EOL;
} catch (Exception $exception) {
  print 'A problem occurred: ' . $exception->getMessage() . ' on line ' . $exception->getLine() . ' in file ' . $exception->getFile() . PHP_EOL;
}
