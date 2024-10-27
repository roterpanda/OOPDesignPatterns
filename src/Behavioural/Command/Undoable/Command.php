<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

interface Command
{
    public function execute(): void;
}