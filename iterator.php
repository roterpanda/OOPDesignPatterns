<?php
use roterpanda\Designpatterns\Behavioural\Iterator\ShoppingList;

require 'vendor/autoload.php';

$shoppingList = new ShoppingList();
$shoppingList->push('Apple');
$shoppingList->push('Banana');
$shoppingList->push('Orange');

$iterator = $shoppingList->createIterator();

while ($iterator->hasNext()) {
    echo $iterator->current() . PHP_EOL;
    $iterator->next();
}