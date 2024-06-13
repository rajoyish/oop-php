<?php
require_once 'Playlist.php';
require_once 'Song.php';

$beatlesSong = new Playlist();
$song = new Song('Yesterday', 100);
$fakeSong = 'This is not a song..it is a string';

//$beatlesSong->songs[] = $song;
//$beatlesSong->songs[] = $fakeSong;
//
//var_dump($beatlesSong->songs);
//$beatlesSong->addSong($fakeSong);
$beatlesSong->addSong($song);
var_dump($beatlesSong->getSongs());
