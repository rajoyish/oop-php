<?php

class JSONFileReader
{
  public function readFileAsAssociativeArray(string $filename): array
  {
    if (!file_exists($filename)) {
      throw new Exception('File not found');
    }
    $content = file_get_contents($filename);

    $items = json_decode($content, true);

    return $items;
  }
}
