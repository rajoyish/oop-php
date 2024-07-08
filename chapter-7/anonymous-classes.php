<?php

use App\Song;
use App\SongWriterInterface;

require 'vendor/autoload.php';

$song = new Song('Help!', 'The beatles', 180);

$songInfo = $song->write(new class implements SongWriterInterface
{
    public function __construct(private string $prefix = 'Disk 1') {}

    public function write(Song $song): string
    {
        return $this->prefix.': '.$song->title.' by '.$song->artist.' '.$song->getDurationInMinutes();
    }
});

echo $songInfo.PHP_EOL;
