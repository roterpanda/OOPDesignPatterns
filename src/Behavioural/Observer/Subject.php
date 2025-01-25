<?php

namespace roterpanda\Designpatterns\Behavioural\Observer;

class Subject
{
    private array $observers = [];

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }


}