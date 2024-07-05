<?php

namespace App;

class Song
{
    public function __construct(public string $title, public string $artist, public int $duration) {}

    public function write(): string
    {
        return $this->title.' - '.$this->artist.' - '.$this->getDurationInMinutes();
    }

    private function getDurationInMinutes(): string
    {
        $seconds = $this->duration % 60;
        $seconds = str_pad($seconds, 2, '0', STR_PAD_LEFT);
        $minutes = (int) (($this->duration - $seconds) / 60);

        return $minutes.':'.$seconds;
    }
}
