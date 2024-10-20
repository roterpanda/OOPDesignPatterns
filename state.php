<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use roterpanda\Designpatterns\Behavioural\State\Document;
use roterpanda\Designpatterns\Behavioural\State\DraftState;
use roterpanda\Designpatterns\Behavioural\State\UserRoles;

$document = new Document(UserRoles::Editor);
echo $document->getState() . PHP_EOL;

$document->publish();
echo $document->getState() . PHP_EOL;

$document->publish();
echo $document->getState() . PHP_EOL;

$document->setCurrentUserRole(UserRoles::Admin);
$document->publish();
echo $document->getState() . PHP_EOL;

$document->setState(new DraftState($document));
echo $document->getState() . PHP_EOL;


