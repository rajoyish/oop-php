<?php

use App\JsonFileProcessor;

require_once 'vendor/autoload.php';

//$fileProcessor = new CsvFileProcessor;
$fileProcessor = new JsonFileProcessor;

$fileProcessor->process(['some' => 'data']);
