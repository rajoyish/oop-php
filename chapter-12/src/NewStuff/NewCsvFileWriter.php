<?php

namespace App\NewStuff;

class NewCsvFileWriter implements NewFileWriterInterface
{
    public function write($data): void
    {
        echo PHP_EOL.'Writing to CSV file...'.PHP_EOL;

        sleep(1);
    }
}
