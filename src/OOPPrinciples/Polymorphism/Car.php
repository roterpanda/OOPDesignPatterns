<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Polymorphism;

class Car extends Vehicle
{
    private int $numberOfDoors;

    public function __construct(string $make, int $numberOfDoors)
    {
        parent::__construct($make);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getNumberOfDoors(): int
    {
        return $this->numberOfDoors;
    }

    #[\Override]
    public function start(): void
    {
        echo 'Starting the ' . $this->getMake() . ' with ' . $this->getNumberOfDoors() . ' doors.' . PHP_EOL;
    }
}