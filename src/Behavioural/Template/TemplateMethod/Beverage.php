<?php

namespace roterpanda\Designpatterns\Behavioural\Template\TemplateMethod;

abstract class Beverage
{
    public function prepare(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public function boilWater(): void
    {
        echo "Boiling water" . PHP_EOL;
    }

    public abstract function brew(): void;

    public abstract function addCondiments(): void;

    public function pourInCup(): void
    {
        echo "Pouring in cup" . PHP_EOL;
    }
}