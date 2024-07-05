<?php

use App\JsonSongDataWriter;
use App\Song;
use App\SongDataWriter;

require_once 'vendor/autoload.php';

$song = new Song('Yesterday', 'The Beatles', 180, new SongDataWriter());
$songAsText = $song->write();
//dd($songAsText);

$jsonSong = new Song('I am Alive', 'Céline Dion', 197, new JsonSongDataWriter());
$songAsJson = $jsonSong->write();
dd($songAsText, $songAsJson);
