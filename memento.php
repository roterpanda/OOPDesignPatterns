<?php

declare(strict_types=1);

use roterpanda\Designpatterns\Behavioural\Memento\Editor;
use roterpanda\Designpatterns\Behavioural\Memento\History;

require 'vendor/autoload.php';

$editor = new Editor();
$history = new History($editor);

function printDivider(): void
{
    print (str_repeat('-', 50) . PHP_EOL);
}

function showUserOptions(): void
{
    print '1. Set title' . PHP_EOL;
    print '2. Set content' . PHP_EOL;
    print '3. Show document' . PHP_EOL;
    print '4. Undo' . PHP_EOL;
    print '5. Show history' . PHP_EOL;
    print '6. Exit' . PHP_EOL;
}

function getUserOption(): int
{
    return (int) readline('Choose an option: ');
}

function setEditorProperty(Editor $editor, string $property, History $history): void
{
    $user_input = readline("Set the $property of the document: ");
    $history->backup();
    if ($property === 'title') {
        $editor->setTitle($user_input);
    } elseif ($property === 'content') {
        $editor->setContent($user_input);
    }
}

function processUserOption(Editor $editor, History $history): void
{
    $option = getUserOption();

    switch ($option) {
        case 1:
            setEditorProperty($editor, 'title', $history);
            break;
        case 2:
            setEditorProperty($editor, 'content', $history);
            break;
        case 3:
            $editor->show();
            break;
        case 4:
            $history->undo();
            break;
        case 5:
            $history->showHistory();
            break;
        case 6:
            exit;
        default:
            print 'Invalid option' . PHP_EOL;
    }
}

printDivider();
print 'Text Editor' . PHP_EOL;
printDivider();

while (true) {
    showUserOptions();
    processUserOption($editor, $history);
    printDivider();
}

