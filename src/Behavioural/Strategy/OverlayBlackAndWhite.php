<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class OverlayBlackAndWhite implements IOverlay
{
    public function apply(): void
    {
        echo 'Applying black and white overlay..' . PHP_EOL;
    }
}