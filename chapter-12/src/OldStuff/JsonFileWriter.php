<?php

namespace App\OldStuff;

class JsonFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        echo PHP_EOL.'Writing to JSON file...'.PHP_EOL;
        sleep(1);

        return true;
    }
}
