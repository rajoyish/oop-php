<?php

namespace App;

use App\OldStuff\FileWriter;

abstract class FileProcessor
{
    public function process($data = [])
    {
        $fileWriter = $this->createFileWriter();
        echo 'Doing some process now...'.PHP_EOL;

        return $fileWriter->writeToFile($data);
    }

    abstract public function createFileWriter(): FileWriter;
}
