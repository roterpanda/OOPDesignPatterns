<?php

namespace roterpanda\Designpatterns\SOLID\I;

class Sphere implements IShape3D
{
    public function __construct(private float $radius)
    {
    }

    public function getArea(): float
    {
        return 4 * pi() * $this->radius * $this->radius;
    }

    public function getVolume(): float
    {
        return 4 / 3 * pi() * $this->radius * $this->radius * $this->radius;
    }
}