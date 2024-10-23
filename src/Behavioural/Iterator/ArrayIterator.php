<?php

namespace roterpanda\Designpatterns\Behavioural\Iterator;

class ArrayIterator implements IIterator
{
    private ShoppingList $shoppingList;
    private int $index = 0;

    public function __construct(ShoppingList $shoppingList)
    {
        $this->shoppingList = $shoppingList;
    }

    public function next()
    {
        $this->index++;
    }

    public function hasNext(): bool
    {
        return $this->index < count($this->shoppingList->getItems());
    }

    public function current(): mixed
    {
        return $this->shoppingList->getItems()[$this->index];
    }
}