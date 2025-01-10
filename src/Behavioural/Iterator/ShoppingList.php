<?php

namespace roterpanda\Designpatterns\Behavioural\Iterator;

/**
 * Class ShoppingList
 * 
 * This class implements the Iterator pattern to allow iteration over a shopping list.
 * 
 * @package Design Patterns\Behavioural\Iterator
 */
class ShoppingList
{
    /**
     * @var array $items An array to store the items in the shopping list.
     */
    private array $items = [];

    /**
     * Creates an iterator for the ShoppingList.
     *
     * @return IIterator An iterator for the ShoppingList.
     */
    public function createIterator(): IIterator
    {
        return new ArrayIterator($this);
    }

    /**
     * Adds an item to the shopping list.
     *
     * @param string $item The item to be added to the list.
     * @return void
     */
    public function push(string $item): void
    {
        $this->items[] = $item;
    }

    /**
     * Removes and returns the last item from the shopping list.
     *
     * @return string The last item in the shopping list.
     */
    public function pop(): string
    {
        return array_pop($this->items);
    }

    /**
     * Retrieves the list of items.
     *
     * @return array The array of items.
     */
    public function getItems(): array
    {
        return $this->items;
    }

}