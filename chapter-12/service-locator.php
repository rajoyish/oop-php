<?php

// service-locator.php

declare(strict_types=1);

use App\OldStuff\CsvFileWriter;
use App\OldStuff\ExampleProcessor;
use App\OldStuff\FileWriter;
use App\ServiceLocator;

require_once 'bootstrap.php';

$serviceLocator = new ServiceLocator;
$serviceLocator->addInstance(FileWriter::class, new CsvFileWriter);
$fileWriter = $serviceLocator->get(FileWriter::class);

$serviceLocator->addClass(ExampleProcessor::class, [$fileWriter]);

// Check if ServiceLocator has ExampleProcessor...print result
echo $serviceLocator->has(ExampleProcessor::class).PHP_EOL;
// Retrieve the ExampleProcessor from the ServiceLocator
$processor = $serviceLocator->get(ExampleProcessor::class);
// Call the process method on the ExampleProcessor with ['some' => 'data']
$processor->process(['some' => 'data']);
// Switch the JsonFileWriter for A CsvFileWriter and re-run
