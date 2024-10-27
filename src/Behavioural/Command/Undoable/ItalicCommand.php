<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

use roterpanda\Designpatterns\Behavioural\Command\Undoable\UndoableCommand;

class ItalicCommand implements UndoableCommand
{
    private string $prevContent = "";

    public function __construct(
        private readonly HtmlDocument $htmlDocument,
        private readonly History $history
    )
    {
    }

    public function execute(): void
    {
        $this->prevContent = $this->htmlDocument->getContent();
        $this->htmlDocument->makeItalic();
        $this->history->push($this);
    }

    function undo(): void
    {
        $this->htmlDocument->setContent($this->prevContent);
    }
}