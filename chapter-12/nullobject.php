<?php

use App\OldStuff\ExampleProcessor;
use App\OldStuff\NullFileWriter;

require_once 'vendor/autoload.php';

$processor = new ExampleProcessor(new NullFileWriter);
$processor->process(['foo' => 'bar']);
