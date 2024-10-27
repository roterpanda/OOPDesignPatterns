<?php

namespace roterpanda\Designpatterns\Behavioural\Command\Undoable;

class HtmlDocument
{
    public function __construct(private string $content = "")
    {
    }

    public function makeItalic(): void
    {
        $this->content = "<em>$this->content</em>";
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }




}