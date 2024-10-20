<?php

namespace roterpanda\Designpatterns\Behavioural\Memento;

/**
 * This class is a memento class. It stores the state of the editor.
 */
class EditorState
{
    private readonly string $_title;
    private readonly string $_content;

    // State meta data
    private readonly \DateTimeImmutable $_createdAt;

    public function __construct(string $title, string $content)
    {
        $this->_title = $title;
        $this->_content = $content;
        $this->_createdAt = new \DateTimeImmutable();
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

    public function getContent(): string
    {
        return $this->_content;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->_createdAt;
    }

    public function getName(): string
    {
        return $this->_createdAt->format('Y-m-d H:i:s') . ' - ' . $this->_title;
    }
}