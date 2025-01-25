<?php

namespace roterpanda\Designpatterns\Behavioural\Observer;

class Sheet2 implements Observer
{
    private int $total = 0;

    public function __construct(private DataSource $dataSource)
    {
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function calculateTotal(array $values): int
    {
        $sum = (int) array_sum($values);
        echo "The sum of the values is {$sum}" . PHP_EOL;
        return $sum;
    }

    public function update(): void
    {
        $this->total = $this->calculateTotal($this->dataSource->getValues());
    }


}