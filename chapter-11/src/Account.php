<?php

namespace App;

class Account
{
    // TODO: account number property
    private int $accountNumber;

    private User $user;

    public function getAccountNumber(): int
    {
        // TODO: return a real account number
        return $this->accountNumber;
    }

    public function setAccountNumber(int $accountNumber)
    {
        // TODO: set a real account number
        $this->accountNumber = $accountNumber;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}
