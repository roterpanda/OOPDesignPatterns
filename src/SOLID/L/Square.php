<?php

namespace Saschabrandt\Designpatterns\SOLID\L;

class Square extends Shape
{

    public function __construct(private float $side)
    {
    }

    public function getArea(): float
    {
        return $this->side * $this->side;
    }

    public function getSide(): float
    {
        return $this->side;
    }

    public function setSide(float $side): void
    {
        $this->side = $side;
    }
}