<?php

trait IdentifiableTrait
{
  public static function generateHexId(): string
  {
    return bin2hex(random_bytes(5));
  }

  public function getHexId(): string
  {
    return bin2hex(random_bytes(5));
  }

  public function printIdentity(): void
  {
    print $this->getId() . ' : ' . $this->getName() . PHP_EOL;
  }

  abstract public function getId(): int;

  abstract public function getName(): string;


}
