<?php

namespace Saschabrandt\DesignPatterns\SOLID\O;

class Rectangle extends Shape
{
    private float $width;
    private float $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}