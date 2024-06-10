<?php
require_once 'Book.php';

class DigitalBook extends Book
{
    public $fileSize;

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function print()
    {
        return "{$this->title}, {$this->author}, {$this->price}, file-size: {$this->fileSize}";
    }


}