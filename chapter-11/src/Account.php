<?php

namespace App;

class Account
{
    // TODO: account number property
    private int $accountNumber;

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
}
