<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class CompressorMOV implements ICompressor
{
    public function compress(): void
    {
        echo 'Compressing file to MOV..' . PHP_EOL;
    }
}