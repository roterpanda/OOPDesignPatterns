<?php

namespace roterpanda\Designpatterns\Behavioural\Observer;

class DataSource extends Subject
{
    private array $values = [];

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $values): void
    {
        $this->values = $values;
        $this->notifyObservers();
    }

}