<?php
require_once 'JSONFileReader.php';

try {

  $reader = new JsonFileReader();
//  $data = $reader->readFileAsAssociativeArray('inventory.json');
//  $data = $reader->readFileAsAssociativeArray(['foo']);
  $data = $reader->readFileAsAssociativeArray();

  $div = 100 / 0;

} catch (ArgumentCountError|TypeError|Error $error) {

  print 'Error: ' . $error->getMessage() . PHP_EOL;

}
