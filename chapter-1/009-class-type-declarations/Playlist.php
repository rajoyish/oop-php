<?php

class Playlist
{
    public array $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getLength(): int
    {
        return count($this->songs);
    }
}