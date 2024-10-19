<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Composition;

class Wheel
{
    public function rotate(): void
    {
        echo 'Wheel rotating' . PHP_EOL;
    }
}