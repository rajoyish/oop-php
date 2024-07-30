<?php

use App\Playlist;
use App\Song;
use App\Video;

require_once 'vendor/autoload.php';

$playlist = new Playlist("Rajesh's Playlist");

$songOne = new Song('I am alive');
$songTwo = new Song('Yesterday');

$videoOne = new Video('OOP PHP in one hour');
$videoTwo = new Video('Let us learn Vue 3');

$playlist->addItem($songOne);
$playlist->addItem($songTwo);
$playlist->addItem($videoOne);
$playlist->addItem($videoTwo);

//$songTwo->play();
//$videoOne->play();
$playlist->play();
