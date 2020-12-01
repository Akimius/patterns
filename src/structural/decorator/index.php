<?php

require 'vendor/autoload.php';

use Decorator\BasicInspection;
use Decorator\OilChangeDecorator;
use Decorator\TireRotationDecorator;

$basicInspection = new BasicInspection();

$oilChange   = new OilChangeDecorator($basicInspection);
$tires       = new TireRotationDecorator($basicInspection);

$tiresAndOil = new TireRotationDecorator($oilChange);

echo $basicInspection->getDescription() . $basicInspection->getCost();
echo PHP_EOL;

echo $tires->getDescription() . $tires->getCost();
echo PHP_EOL;

echo $tiresAndOil->getDescription() . $tiresAndOil->getCost();
echo PHP_EOL;