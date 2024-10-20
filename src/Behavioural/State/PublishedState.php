<?php

namespace roterpanda\Designpatterns\Behavioural\State;

class PublishedState implements State
{
    private Document $_document;

    public function __construct(Document $document)
    {
        $this->_document = $document;
    }

    public function publish(): void
    {
    }

    public function __toString(): string
    {
        return 'Published';
    }
}