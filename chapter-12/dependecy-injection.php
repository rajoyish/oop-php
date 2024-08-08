<?php

use App\OldStuff\CsvFileWriter;
use App\OldStuff\ExampleProcessor;
use App\OldStuff\JsonFileWriter;

require_once 'vendor/autoload.php';

$csv = new CsvFileWriter;
$json = new JsonFileWriter;

$processor = new ExampleProcessor($json);

$processor->process(['some' => 'data']);
