<?php

declare(strict_types=1);

use roterpanda\Designpatterns\Behavioural\Memento\Editor;
use roterpanda\Designpatterns\Behavioural\Memento\History;

require 'vendor/autoload.php';

$editor = new Editor('Design Patterns', 'The design patterns are a collection of best practices in software design');
$history = new History($editor);
echo 'Current title: ' . $editor->getTitle() . PHP_EOL;

$history->backup();
$history->showHistory();

$editor->setTitle('Changed title');
echo 'Changing title. Current title: ' . $editor->getTitle() . PHP_EOL;
$history->showHistory();

$history->undo();
$history->showHistory();

echo 'Current title: ' . $editor->getTitle() . PHP_EOL;