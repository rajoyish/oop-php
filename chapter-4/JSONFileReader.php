<?php
require_once 'FileNotFoundException.php';

class JSONFileReader
{
  public function readFileAsAssociativeArray(string $filename): array
  {
    if (!file_exists($filename)) {
      throw new FileNotFoundException('File not found');
    }
    $content = file_get_contents($filename);

    $items = json_decode(json: $content, associative: true, flags: JSON_THROW_ON_ERROR);

    return $items;
  }
}
