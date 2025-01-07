<?php

namespace roterpanda\Designpatterns\Behavioural\Template\StrategyPattern;
use PHPUnit\Event\Runtime\PHP;

class Tea implements Beverage
{

    function prepare(): void
    {
        $this->brew();
        $this->addCondiments();
    }


    public function brew(): void
    {
        echo "Brewing tea for 3 minutes." . PHP_EOL;
    }

    public function addCondiments(): void
    {
        if ($this->customerWantsCondiments()) {
            echo "Adding lemon to tea." . PHP_EOL;
        }
    }

    private function customerWantsCondiments(): bool
    {
        $input = readline("Would you like lemon with your tea? (y/n)");
        return strtolower($input) === "y";
    }


}