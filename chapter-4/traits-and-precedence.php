<?php
require_once 'Song.php';

$song = new Song();
print $song->getId() . PHP_EOL; // from class
print $song->getHexId() . PHP_EOL;
print $song->getOriginalHexId() . PHP_EOL;
print $song->getTraitId() . PHP_EOL; // from trait
