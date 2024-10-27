<?php

require_once "vendor/autoload.php";

use roterpanda\Designpatterns\Behavioural\Command\Dim;
use roterpanda\Designpatterns\Behavioural\Command\Light;
use roterpanda\Designpatterns\Behavioural\Command\RemoteControl;
use roterpanda\Designpatterns\Behavioural\Command\TurnOff;
use roterpanda\Designpatterns\Behavioural\Command\TurnOn;

$light = new Light();
$remote = new RemoteControl(new TurnOn($light));
$remote->pressButton();

$remote->setCommand(new TurnOff($light));
$remote->pressButton();

$remote->setCommand(new Dim($light));
$remote->pressButton();


