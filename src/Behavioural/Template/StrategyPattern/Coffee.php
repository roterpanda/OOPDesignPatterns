<?php

namespace roterpanda\Designpatterns\Behavioural\Template\StrategyPattern;

class Coffee implements Beverage
{

    public function prepare(): void
    {
        $this->grindCoffee();
        $this->brew();
    }

    public function grindCoffee(): void
    {
        echo "Grinding coffee beans" . PHP_EOL;
    }

    public function brew(): void
    {
        echo "Brewing coffee for 5 minutes" . PHP_EOL;
    }

}