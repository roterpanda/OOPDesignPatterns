<?php

namespace roterpanda\Designpatterns\OOPPrinciples\Composition;

class Engine
{
    public function start(): void
    {
        echo 'Engine started' . PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Engine stopped' . PHP_EOL;
    }
}