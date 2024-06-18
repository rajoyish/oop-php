<?php

class Playlist implements SongHolder
{
  private array $songs = [];

  public function getSongs(): array
  {
    return $this->songs;
  }

  public function addSong(Song $song): void
  {
    $this->songs[] = $song;
  }
}
