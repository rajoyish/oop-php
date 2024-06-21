<?php
require_once 'Model.php';

class Song extends Model
{
  public function getGroup()
  {
    return 'streamable';
  }
}
