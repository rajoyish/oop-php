<?php

declare(strict_types=1);

use App\Account;
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
}
