<?php

namespace roterpanda\Designpatterns\Behavioural\Memento;

/**
 * Represents the caretaker class in the memento pattern.
 */
class History
{
    private array $_states = [];
    private Editor $_editor;

    public function __construct(Editor $editor)
    {
        $this->_editor = $editor;
    }

    public function backup(): void
    {
        $this->_states[] = $this->_editor->createState();
    }

    public function undo(): void
    {
        if (empty($this->_states)) {
            return;
        }

        $prevState = array_pop($this->_states);
        $this->_editor->restore($prevState);
    }

    public function showHistory(): void
    {
        echo 'History:' . PHP_EOL;
        foreach ($this->_states as $state) {
            echo 'Name: ' . $state->getName() . PHP_EOL;
        }
    }

}