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

function setEditorTitle(Editor $editor): void
{
    $user_title = readline('Set the title of the document: ');
    $editor->setTitle($user_title);
}

function setEditorContent(Editor $editor): void
{
    $user_content = readline('Set the content of the document: ');
    $editor->setContent($user_content);
}

function processUserOption(Editor $editor, History $history): void
{
    $option = getUserOption();

    switch ($option) {
        case 1:
            $history->backup();
            setEditorTitle($editor);
            break;
        case 2:
            $history->backup();
            setEditorContent($editor);
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

