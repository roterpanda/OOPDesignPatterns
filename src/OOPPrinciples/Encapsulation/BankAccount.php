<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Encapsulation;

/**
 * Class BankAccount
 *
 * This class represents a bank account with basic operations such as deposit, withdraw, and balance inquiry.
 * It demonstrates the principle of encapsulation by keeping the balance property private and providing public methods
 * to interact with it.
 *
 * @package roterpanda\Designpatterns\OOPPrinciples\Encapsulation
 */
class BankAccount
{
    private float $balance = 0;

    public function __construct(float $balance)
    {
        $this->deposit($balance);
    }

    /**
     * Deposits a specified amount into the bank account.
     *
     * This method increases the account balance by the given amount.
     * The amount must be a positive number; otherwise, an exception is thrown.
     *
     * @param float $amount The amount to be deposited.
     * 
     * @throws \InvalidArgumentException If the deposit amount is less than 0.
     * 
     * @return void
     */
    public function deposit(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException('Deposit amount has to be greater than 0');
        }
        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('Withdrawal amount has to be greater than 0');
        }
        if ($this->balance < $amount) {
            throw new \InvalidArgumentException('Insufficient funds');
        }
        $this->balance -= $amount;
    }
}