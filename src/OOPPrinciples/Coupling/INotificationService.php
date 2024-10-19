<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Coupling;

interface INotificationService
{
    public function sendNotification(string $message): void;
}