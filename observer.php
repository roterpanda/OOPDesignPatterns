<?php

use roterpanda\Designpatterns\Behavioural\Observer\BarChart;
use roterpanda\Designpatterns\Behavioural\Observer\DataSource;
use roterpanda\Designpatterns\Behavioural\Observer\Sheet2;

require 'vendor/autoload.php';

$datasource = new DataSource();

$sheet2 = new Sheet2($datasource);
$barChart = new BarChart($datasource);

$datasource->addObserver($sheet2);
$datasource->addObserver($barChart);

$datasource->setValues([1, 2, 3, 4, 5]);
$datasource->setValues([100, 5, 3, 10]);
