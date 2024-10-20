<?php

use PHPUnit\Framework\TestCase;
use roterpanda\Designpatterns\Behavioural\Memento\Editor;
use roterpanda\Designpatterns\Behavioural\Memento\EditorState;

class EditorMementoTest extends TestCase
{

    public function testEditorRestore()
    {
        $editor = new Editor();
        $editor->setTitle('Original Title');
        $editor->setContent('Original Content');

        $state = new EditorState('Restored Title', 'Restored Content');

        $editor->restore($state);

        $this->assertEquals('Restored Title', $editor->getTitle());
        $this->assertEquals('Restored Content', $editor->getContent());

    }

}