<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Strategy\App;
use Strategy\LogToDatabase;
use Strategy\LogToWebservice;

$app = new App();

echo $app->log('logging something');
echo PHP_EOL;

echo $app->log('something important', new LogToDatabase());
echo PHP_EOL;

echo $app->log('some info', new LogToWebservice());
echo PHP_EOL;