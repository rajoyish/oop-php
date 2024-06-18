<?php

require_once 'Book.php';

class DigitalBook extends Book
{
  public $fileSize;

  public function __construct($title, $fileSize)
  {
    parent::__construct($title);
    $this->fileSize = $fileSize;
  }

  public function write(): string
  {
    return "{$this->title} {$this->fileSize} MB";
  }
}
