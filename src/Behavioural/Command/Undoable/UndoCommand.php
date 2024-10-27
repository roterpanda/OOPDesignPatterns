<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

use roterpanda\Designpatterns\Behavioural\Command\Undoable\Command;

class UndoCommand implements Command
{

    public function __construct(private readonly History $history)
    {
    }

    public function execute(): void
    {
       if ($this->history->size() > 0) {
           $lastCommand = $this->history->pop();
           $lastCommand->undo();
       }
    }
}