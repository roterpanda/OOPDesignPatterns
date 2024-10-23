<?php

namespace roterpanda\Designpatterns\Behavioural\Iterator;

interface IIterator
{
    function next();
    function hasNext(): bool;
    function current(): mixed;
}