<?php

// src/OldStuff/ExampleProcessor.php

namespace App\OldStuff;

use App\Service;
use Exception;

class ExampleProcessor implements Service
{
    private FileWriter $fileWriter;

    public function __construct(FileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function process(array $data): bool
    {
        $result = $this->fileWriter->writeToFile($data);

        if (! $result) {
            throw new Exception('Error writing to file');
        }

        // Continue processing
        echo 'Continue processing...'.PHP_EOL;

        return true;
    }
}
