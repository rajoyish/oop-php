<?php

require_once 'SongHandler.php';

class Album implements SongHolder
{
  private array $songs = [];

  public function addSong(Song $song): void
  {
    $this->songs[] = $song;
  }

  public function getSongs(): array
  {
    return $this->songs;
  }
}
