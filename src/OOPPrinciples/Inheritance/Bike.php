<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Inheritance;

class Bike extends Vehicle
{
    private string $type;

    public function __construct(string $make, string $model, string $color, int $year, string $type)
    {
        parent::__construct($make, $model, $color, $year);
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}