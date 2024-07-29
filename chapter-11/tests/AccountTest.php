<?php

declare(strict_types=1);

use App\Account;
use App\User;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /** @test */
    public function an_account_number_can_be_set(): void
    {
        // setup
        $account = new Account;

        // do something
        $account->setAccountNumber(12345);

        // make assertion
        $this->assertSame(12345, $account->getAccountNumber());
    }

    /** @test */
    public function an_account_can_be_related_to_a_user(): void
    {
        // setup
        $account = new Account;
        $accountHolder = new User;

        // do something
        $account->setAccountHolder($accountHolder);

        // make assertion
        $this->assertSame($accountHolder, $account->getAccountHolder());

    }
}
