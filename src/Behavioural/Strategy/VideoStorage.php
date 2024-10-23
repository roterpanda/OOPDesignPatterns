<?php

namespace roterpanda\Designpatterns\Behavioural\Strategy;

class VideoStorage
{
    public function __construct(
        private ICompressor $compressor,
        private IOverlay $overlay = new OverlayNone()
    ) {
    }

    public function setCompressor(ICompressor $compressor): void
    {
        $this->compressor = $compressor;
    }

    public function setOverlay(IOverlay $overlay): void
    {
        $this->overlay = $overlay;
    }

    public function store(string $filename): void
    {
        // Compress the video
        $this->compressor->compress();
        // Add overlay
        $this->overlay->apply();
        echo "Storing video to $filename" . PHP_EOL;
    }


}