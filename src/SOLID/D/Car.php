<?php

namespace roterpanda\Designpatterns\SOLID\D;

class Car
{
    public function __construct(private IEngine $engine)
    {
    }

    public function start(): void
    {
        $this->engine->start();
        echo 'Car started' . PHP_EOL;
    }
}