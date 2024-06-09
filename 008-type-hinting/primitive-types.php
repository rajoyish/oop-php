<?php
declare(strict_types=1);
require_once 'Song.php';

$song = new Song("Never gonna give up", 123);

print $song->name . PHP_EOL;
print $song->numberOfPlays . PHP_EOL;

# Run the code on terminal
//php 008-type-hinting/primitive-types.php
