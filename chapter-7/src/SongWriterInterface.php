<?php

namespace App;

interface SongWriterInterface
{
    public function write(Song $song): string;
}
