<?php

namespace App;

class Account
{
    // TODO: account number property
    private int $accountNumber;

    private User $accountHolder;

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

    public function getAccountHolder(): User
    {
        return $this->accountHolder;
    }

    public function setAccountHolder(User $accountHolder): void
    {
        $this->accountHolder = $accountHolder;
    }
}
