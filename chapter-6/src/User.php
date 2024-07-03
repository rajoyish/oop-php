<?php

namespace App;

class User implements AuthenticateUserInterface
{
    public function __construct(private int $id, public string $name) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setPassword(string $password): void
    {
        echo 'Setting a password...';
    }
}
