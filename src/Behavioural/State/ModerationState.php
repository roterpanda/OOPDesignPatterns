<?php

namespace roterpanda\Designpatterns\Behavioural\State;

class ModerationState implements State
{
    private Document $_document;

    public function __construct(Document $document)
    {
        $this->_document = $document;
    }

    public function publish(): void
    {
        if ($this->_document->getCurrentUserRole() === UserRoles::Admin) {
            $this->_document->setState(new PublishedState($this->_document));
        }
    }

    public function __toString(): string
    {
        return 'Moderation';
    }
}