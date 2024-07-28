<?php

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
        $account->setAccountNumber(1);

        // make assertion
        $this->assertEquals(1, $account->getAccountNumber());
    }
}
