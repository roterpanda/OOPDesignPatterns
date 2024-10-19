<?php

use PHPUnit\Framework\TestCase;
use Saschabrandt\Designpatterns\OOPPrinciples\Encapsulation\BankAccount;


class BankAccountTest extends TestCase
{
    public function testDepositIncreasesBalance()
    {
        $account = new BankAccount(0);
        $account->deposit(100);
        $this->assertEquals(100, $account->getBalance());
    }

    public function testDepositNegativeAmountThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Deposit amount has to be greater than 0');

        $account = new BankAccount(0);
        $account->deposit(-50);
    }

    public function testInitialBalanceIsSetCorrectly()
    {
        $account = new BankAccount(50);
        $this->assertEquals(50, $account->getBalance());
    }

    public function testWithdrawThrowsExceptionInsufficientFunds()
    {
        $account = new BankAccount(10);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Insufficient funds');

        $account->withdraw(amount: 20);
    }
}