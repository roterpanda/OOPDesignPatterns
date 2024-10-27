<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

interface UndoableCommand extends Command
{
    function undo(): void;
}