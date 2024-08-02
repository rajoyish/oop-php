<?php

use App\NewStuff\NewCsvFileWriter;
use App\NewStuff\NewFileWriterAdapter;
use App\OldStuff\ExampleProcessor;

require_once 'vendor/autoload.php';

$fileWriter = new NewCsvFileWriter;
$fileWriter = new NewFileWriterAdapter($fileWriter);

$processor = new ExampleProcessor($fileWriter);
$processor->process(['foo' => 'bar']);
