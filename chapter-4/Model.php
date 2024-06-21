<?php

abstract class Model
{
  private $group;

  public function __construct()
  {
    $this->group = static::getGroup();
  }

  public function getGroup()
  {
    return 'default';
  }

  public static function create(): Model
  {
    return new static();
  }
}
