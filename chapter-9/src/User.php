<?php

namespace App;

class User
{
    public function __construct(public string $username, protected string $password) {}

    public function __serialize(): array
    {
        return [
            'user' => $this->username,
            'pass' => $this->password,
        ];
    }

    public function __sleep(): array
    {
        echo 'Going to sleep...';

        return ['username', 'password'];
    }

    public function __wakeup(): void
    {
        echo 'Waking up...';
    }

    public function __unserialize(array $data): void
    {
        $this->username = $data['user'];
        $this->password = $data['pass'];

        echo 'Doing anything else which is necessary...'.PHP_EOL;
    }
}
