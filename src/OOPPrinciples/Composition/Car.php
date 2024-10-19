<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Composition;

use roterpanda\Designpatterns\OOPPrinciples\Composition\Engine;
use roterpanda\Designpatterns\OOPPrinciples\Composition\Wheel;

class Car
{
    private Engine $engine;
    private Wheel $wheel;

    public function __construct()
    {
        $this->engine = new Engine();
        $this->wheel = new Wheel();
    }

    public function drive(): void
    {
        $this->engine->start();
        $this->wheel->rotate();
    }
}