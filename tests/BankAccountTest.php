<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use roterpanda\Designpatterns\OOPPrinciples\Encapsulation\BankAccount;


final class BankAccountTest extends TestCase
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

    #[DataProvider('depositProvider')]
    public function testDeposit(int $initialBalance, int $deposit, int $expectedBalance)
    {
        $account = new BankAccount($initialBalance);
        $account->deposit($deposit);
        $this->assertEquals($expectedBalance, $account->getBalance());
    }

    public static function depositProvider(): array
    {
        return [
            "balance 0, add 100" => [0, 100, 100],
            "balance 50, add 50" => [50, 50, 100],
            "balance 100, add 0" => [100, 0, 100],
        ];
    }

}