<?php
use roterpanda\Designpatterns\Behavioural\Strategy\CompressorMOV;
use roterpanda\Designpatterns\Behavioural\Strategy\CompressorMP4;
use roterpanda\Designpatterns\Behavioural\Strategy\OverlayBlackAndWhite;
use roterpanda\Designpatterns\Behavioural\Strategy\VideoStorage;

require 'vendor/autoload.php';

$videoStorage = new VideoStorage(new CompressorMOV());
$videoStorage->store('video.mov');

$videoStorage->setOverlay(new OverlayBlackAndWhite());
$videoStorage->setCompressor(new CompressorMP4());

$videoStorage->store('video.mp4');

