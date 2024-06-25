<?php
require_once 'JSONFileReader.php';
require_once 'FileNotFoundException.php';

try {

  $filePointer = fopen('errors.txt', 'a+');
  fwrite($filePointer, date("Y-m-d H:i:s") . "\n");

  $reader = new JsonFileReader();
  $items = $reader->readFileAsAssociativeArray('foo.json');

  print_r($items);

} catch (FileNotFoundException|JsonException $fileException) {

  fwrite($filePointer,
    "File problem: {$fileException->getMessage()} on line {$fileException->getLine()}  in file {$fileException->getFile()} \n");

  print 'There was a problem with your file...please check the errors.log' . PHP_EOL;

} catch (Exception $exception) {

  fwrite($filePointer,
    "A problem occurred: {$exception->getMessage()} on line {$exception->getLine()} in file {$exception->getFile()} \n");

  print 'There was a problem...please check the errors.log' . PHP_EOL;

} finally {

  print "Finally block being called" . PHP_EOL;

  fclose($filePointer);
}
