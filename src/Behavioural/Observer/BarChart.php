<?php

namespace roterpanda\Designpatterns\Behavioural\Observer;

class BarChart implements Observer
{
    public function __construct(private DataSource $dataSource)
    {
    }

    public function update(): void
    {
        $values = $this->dataSource->getValues();
        echo "The bar chart is updated with values: " . implode(', ', $values) . PHP_EOL;
    }

}