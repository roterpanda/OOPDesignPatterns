<?php

use roterpanda\Designpatterns\Behavioural\Command\Undoable\History;
use roterpanda\Designpatterns\Behavioural\Command\Undoable\HtmlDocument;
use roterpanda\Designpatterns\Behavioural\Command\Undoable\ItalicCommand;
use roterpanda\Designpatterns\Behavioural\Command\Undoable\UndoCommand;

require_once 'vendor/autoload.php';

$htmlDoc = new HtmlDocument("Hello World!");
$history = new History();
echo $htmlDoc->getContent() . PHP_EOL;

$italicCommand = new ItalicCommand($htmlDoc, $history);
$italicCommand->execute();
echo $htmlDoc->getContent() . PHP_EOL;

$undoCommand = new UndoCommand($history);
$undoCommand->execute();
echo $htmlDoc->getContent() . PHP_EOL;
