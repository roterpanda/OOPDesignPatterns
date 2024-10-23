<?php
use roterpanda\Designpatterns\Behavioural\Strategy\CompressorMOV;
use roterpanda\Designpatterns\Behavioural\Strategy\CompressorMP4;
use roterpanda\Designpatterns\Behavioural\Strategy\OverlayBlackAndWhite;
use roterpanda\Designpatterns\Behavioural\Strategy\VideoStorage;

require 'vendor/autoload.php';
/*
The VideoStorage class uses the Strategy Design Pattern for flexible video compression and overlay application.

1. **Strategy Design Pattern**: Encapsulates interchangeable algorithms, allowing them to vary independently from clients.

2. **Context (VideoStorage)**: Maintains a reference to a strategy object and delegates tasks to it.

3. **Strategy Interface**: Interfaces like `ICompressor` and `IOverlay` define methods for concrete strategies.

4. **Concrete Strategies**: Classes like `CompressorMOV`, `CompressorMP4`, and `OverlayBlackAndWhite` implement the strategy interfaces.

5. **Usage**:
    - Configure `VideoStorage` with `CompressorMOV` and store a video.
    - Set an overlay strategy (`OverlayBlackAndWhite`).
    - Change the compression strategy to `CompressorMP4`.
    - Store another video with the new strategies.

This pattern allows `VideoStorage` to change behavior dynamically at runtime.
*/

$videoStorage = new VideoStorage(new CompressorMOV());
$videoStorage->store('video.mov');

$videoStorage->setOverlay(new OverlayBlackAndWhite());
$videoStorage->setCompressor(new CompressorMP4());

$videoStorage->store('video.mp4');

