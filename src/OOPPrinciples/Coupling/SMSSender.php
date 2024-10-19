<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Coupling;

class SMSSender implements INotificationService
{
    public function sendNotification(string $message): void
    {
        echo 'Sending SMS with message: ' . $message . PHP_EOL;
    }
}