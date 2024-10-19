<?php

namespace roterpanda\Designpatterns\SOLID\S;

class UserService
{
    private EmailSender $emailSender;

    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function register(User $user): void
    {
        // Register the user
        echo 'Registering user ' . $user->getUsername() . PHP_EOL;

        // Send the user a welcome email
        $this->emailSender->sendEmail($user->getEmail(), 'Welcome to our website!');
    }
}