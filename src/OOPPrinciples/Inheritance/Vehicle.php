<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Inheritance;

class Vehicle
{
    private string $make;
    private string $model;
    private string $color;
    private int $year;

    public function __construct(string $make, string $model, string $color, int $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function drive(): void
    {
        echo 'Driving the ' . $this->year . ' ' . $this->make . ' ' . $this->model . PHP_EOL;
    }
}