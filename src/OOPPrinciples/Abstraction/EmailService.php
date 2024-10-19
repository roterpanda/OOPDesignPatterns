<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Abstraction;

class EmailService
{
    private function connect(): void
    {
        echo 'Connecting to email service' . PHP_EOL;
    }

    private function authenicate(): void
    {
        echo 'Authenticating with email service' . PHP_EOL;
    }

    public function sendEmail(string $email, string $message): void
    {
        $this->connect();
        $this->authenicate();
        echo 'Sending email to ' . $email . ' with message: ' . $message . PHP_EOL;
        $this->disconnect();
    }

    private function disconnect(): void
    {
        echo 'Disconnecting from email service' . PHP_EOL;
    }
}