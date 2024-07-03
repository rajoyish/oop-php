<?php

namespace App;

class User implements AuthenticateUserInterface
{
    public function __construct(private int $id, private string $name) {}
}
