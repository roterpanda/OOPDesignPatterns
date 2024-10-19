<?php

namespace roterpanda\Designpatterns\SOLID\O;

class Circle extends Shape
{
    private float $radius;
    private ShapeType $type = ShapeType::Circle;

    public function __construct(float $radius = 1.0)
    {
        $this->radius = $radius;
    }

    #[\Override]
    public function calculateArea(): float
    {
        return $this->radius * $this->radius * pi();
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getType(): string
    {
        return $this->type->toString();
    }
}