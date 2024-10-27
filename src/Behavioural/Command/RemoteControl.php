<?php

namespace roterpanda\Designpatterns\Behavioural\Command;

class RemoteControl
{

    public function __construct(private Command $command)
    {
    }

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function pressButton(): void
    {
        $this->command->execute();
    }

}