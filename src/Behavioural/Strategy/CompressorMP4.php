<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class CompressorMP4 implements ICompressor
{
    public function compress(): void
    {
        echo 'Compressing file to MP4..' . PHP_EOL;
    }
}