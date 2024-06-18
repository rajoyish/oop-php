<?php
require_once 'Song.php';
require_once 'SongHolder.php';
require_once 'Playlist.php';

$song = new Song('I am alive', 100);
$playlist = new Playlist();
$playlist->addSong($song);
var_dump($playlist->getSongs());
