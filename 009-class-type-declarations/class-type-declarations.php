<?php
require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song("Never gonna give up", 100);
//$song2 = 'I am alive';
$song2 = new Song('I am alive', 400);

$playlist->addSong($song1);
$playlist->addSong($song2);
print count($playlist->songs) . PHP_EOL;

foreach ($playlist->songs as $song) {
    print $song->name . PHP_EOL;
}