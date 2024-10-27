<?php

namespace roterpanda\Designpatterns\Behavioural\Command;

class TurnOff implements Command
{
    public function __construct(private readonly Light $light)
    {
    }

    public function execute(): void
    {
        $this->light->turnOff();
    }
}