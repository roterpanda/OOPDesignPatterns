<?php

namespace Saschabrandt\Designpatterns\SOLID\S;

class EmailSender
{
    public function sendEmail(string $email, string $message): void
    {
        echo "Sending email to $email with message: $message" . PHP_EOL;
    }
}