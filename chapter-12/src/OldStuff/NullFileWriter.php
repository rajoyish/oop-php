<?php

namespace App\OldStuff;

class NullFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        return true;
    }
}
