<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class CompressorWEBM implements ICompressor
{
    public function compress(): void
    {
        echo 'Compressing file to WEBM..' . PHP_EOL;
    }
}