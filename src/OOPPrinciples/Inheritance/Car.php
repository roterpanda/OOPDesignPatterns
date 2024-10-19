<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Inheritance;

class Car extends Vehicle
{
    private string $licensePlate;

    public function __construct(string $make, string $model, string $color, int $year, string $licensePlate)
    {
        parent::__construct($make, $model, $color, $year);
        $this->licensePlate = $licensePlate;
    }

    public function getLicensePlate(): string
    {
        return $this->licensePlate;
    }
}