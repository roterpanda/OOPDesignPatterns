<?php

namespace roterpanda\Designpatterns\SOLID\I;

class Circle implements IShape2D
{
    public function __construct(private float $radius)
    {
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * pi();
    }

}