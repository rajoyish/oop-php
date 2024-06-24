<?php
require_once 'JSONFileReader.php';
require_once 'FileNotFoundException.php';

try {
  $reader = new JSONFileReader();
  // $items = $reader->readFileAsAssociativeArray('inventory.json');
  $items = $reader->readFileAsAssociativeArray('foo.json');
  print_r($items);
} catch (FileNotFoundException|JsonException $fileException) {
  print 'File problem: ' . $fileException->getMessage() . ' on line ' . $fileException->getLine() . ' in file ' . $fileException->getFile() . PHP_EOL;
} catch (Exception $exception) {
  print 'A problem occurred: ' . $exception->getMessage() . ' on line ' . $exception->getLine() . ' in file ' . $exception->getFile() . PHP_EOL;
}
