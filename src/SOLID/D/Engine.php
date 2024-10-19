<?php

namespace roterpanda\Designpatterns\SOLID\D;

class Engine implements IEngine
{
    public function start(): void
    {
        echo 'Engine started' . PHP_EOL;
    }
}