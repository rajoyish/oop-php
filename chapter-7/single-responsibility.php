<?php

use App\Song;

require_once 'vendor/autoload.php';

$song = new Song('Yesterday', 'The Beatles', 180);
$songAsText = $song->write();
dd($songAsText);
