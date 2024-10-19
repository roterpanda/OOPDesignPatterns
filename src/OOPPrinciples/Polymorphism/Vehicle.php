<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Polymorphism;

class Vehicle
{
    private string $make;

    public function __construct(string $make)
    {
        $this->make = $make;
    }

    public function start(): void
    {
        echo 'Starting the ' . $this->make . PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Stopping the ' . $this->make . PHP_EOL;
    }

    public function getMake(): string
    {
        return $this->make;
    }
}