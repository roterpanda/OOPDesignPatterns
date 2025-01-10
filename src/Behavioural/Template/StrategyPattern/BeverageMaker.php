<?php

namespace roterpanda\Designpatterns\Behavioural\Template\StrategyPattern;

use roterpanda\Designpatterns\Behavioural\Template\StrategyPattern\Beverage;

class BeverageMaker
{
    public function __construct(private Beverage $beverage)
    {
    }

    public function setBevarage(Beverage $beverage): void
    {
        $this->beverage = $beverage;
    }

    public function getBeverage(): Beverage
    {
        return $this->beverage;
    }

    public function prepare(): void
    {
        // Common steps for preparing a beverage
        echo "Boiling water" . PHP_EOL;
        $this->beverage->prepare();
    }

}