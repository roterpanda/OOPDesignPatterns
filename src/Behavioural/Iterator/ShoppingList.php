<?php

namespace roterpanda\Designpatterns\Behavioural\Iterator;

class ShoppingList
{
    private array $items = [];

    public function createIterator(): IIterator
    {
        return new ArrayIterator($this);
    }

    public function push(string $item): void
    {
        $this->items[] = $item;
    }

    public function pop(): string
    {
        return array_pop($this->items);
    }

    public function getItems(): array
    {
        return $this->items;
    }

}