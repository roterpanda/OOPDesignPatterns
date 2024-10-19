<?php

namespace Saschabrandt\Designpatterns\SOLID\O;

enum ShapeType
{
    case Circle;
    case Rectangle;

    public function toString(): string
    {
        return match ($this) {
            self::Circle => 'Circle',
            self::Rectangle => 'Rectangle',
        };
    }
}