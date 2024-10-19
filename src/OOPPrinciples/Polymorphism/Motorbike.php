<?php

namespace Saschabrandt\Designpatterns\OOPPrinciples\Polymorphism;

class Motorbike extends Vehicle
{
    private string $type;

    public function __construct(string $make, string $type)
    {
        parent::__construct($make);
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    #[\Override]
    public function start(): void
    {
        echo 'Starting the ' . $this->getMake() . ' ' . $this->getType() . PHP_EOL;
    }
}