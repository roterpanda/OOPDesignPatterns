<?php

namespace roterpanda\Designpatterns\Behavioural\State;

class DraftState implements State
{
    private Document $_document;

    public function __construct(Document $document)
    {
        $this->_document = $document;
    }

    public function publish(): void
    {
        $this->_document->setState(new ModerationState($this->_document));
    }

    public function __toString(): string
    {
        return 'Draft';
    }
}