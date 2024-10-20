<?php

namespace roterpanda\Designpatterns\Behavioural\Memento;

/**
 * The Originator holds some important state that may change over time.
 */
class Editor
{
    public function __construct(public string $title, public string $content)
    {
    }

    public function createState(): EditorState
    {
        return new EditorState($this->title, $this->content);
    }

    public function restore(EditorState $state): void
    {
        $this->title = $state->getTitle();
        $this->content = $state->getContent();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

}