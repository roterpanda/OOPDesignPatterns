<?php

namespace roterpanda\Designpatterns\Behavioural\Command;

class Light
{
    public function turnOn(): void
    {
        echo "Light is on." . PHP_EOL;
    }

    public function turnOff(): void
    {
        echo "Light is off." . PHP_EOL;
    }

    public function dim(): void
    {
        echo "Dim is on." . PHP_EOL;
    }
}