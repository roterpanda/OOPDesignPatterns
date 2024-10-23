<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class OverlayBlur implements IOverlay
{
    public function apply(): void
    {
        echo 'Applying overlay blur..' . PHP_EOL;
    }
}