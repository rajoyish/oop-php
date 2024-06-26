<?php

abstract class HtmlBlock
{
  public function __construct(private string $content)
  {
  }

  public function __toString(): string
  {
    return static::getOpeningTag() . $this->content . static::getClosingTag();
  }

  abstract public static function getOpeningTag(): string;

  abstract public static function getClosingTag(): string;
}
