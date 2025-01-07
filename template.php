<?php

require_once "vendor/autoload.php";

use roterpanda\Designpatterns\Behavioural\Template\StrategyPattern\Tea;

$tea = new Tea();
$tea->addCondiments();
$tea->brew();


