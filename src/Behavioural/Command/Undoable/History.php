<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

class History
{

    public function __construct(private array $commands = [])
    {
    }

    public function push(UndoableCommand $command): void
    {
       $this->commands[] = $command;
    }

    public function pop(): ?UndoableCommand
    {
        return array_pop($this->commands);
    }

    public function size(): int
    {
        return count($this->commands);
    }



}