<?php

require 'vendor/autoload.php';

use structural\decorator\BasicInspection;
use structural\decorator\OilChange;
use structural\decorator\TireRotation;

$basicInspection = new BasicInspection();

$oilChange   = new OilChange($basicInspection);
$tires       = new TireRotation($basicInspection);

$tiresAndOil = new TireRotation($oilChange);

echo $basicInspection->getDescription() . $basicInspection->getCost();
echo PHP_EOL;

echo $tires->getDescription() . $tires->getCost();
echo PHP_EOL;

echo $tiresAndOil->getDescription() . $tiresAndOil->getCost();
echo PHP_EOL;