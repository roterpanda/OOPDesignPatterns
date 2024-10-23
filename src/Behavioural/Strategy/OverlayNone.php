<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class OverlayNone implements IOverlay
{
    public function apply(): void
    {
        echo 'No overlay applied.' . PHP_EOL;
    }
}