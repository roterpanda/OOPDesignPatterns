<?php

namespace roterpanda\Designpatterns\Behavioural\Template\TemplateMethod;

class Tea extends Beverage
{
    public function addCondiments(): void
    {
        // Implementation of addCondiments method
        echo "Adding lemon\n";
    }

    public function brew(): void
    {
        // Implementation of brew method
        echo "Steeping the tea\n";
    }
}