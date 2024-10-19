<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Coupling;

class EmailSender implements INotificationService
{
    public function sendNotification(string $message): void
    {
        echo 'Sending email with message: ' . $message . PHP_EOL;
    }
}