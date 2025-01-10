<?php

require_once "vendor/autoload.php";

use roterpanda\Designpatterns\Behavioural\Template\StrategyPattern\BeverageMaker;
use roterpanda\Designpatterns\Behavioural\Template\StrategyPattern\Coffee;
use roterpanda\Designpatterns\Behavioural\Template\StrategyPattern\Tea;


// Using Strategy Pattern
$beverageMaker = new BeverageMaker(new Tea());
$beverageMaker->prepare();
$beverageMaker->setBevarage(new Coffee());
$beverageMaker->prepare();

// Using Template Method Pattern
$tea = new \roterpanda\Designpatterns\Behavioural\Template\TemplateMethod\Tea();
$tea->prepare();


