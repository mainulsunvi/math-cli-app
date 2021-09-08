<?php

use MathApp\commands\AddCommand;
use MathApp\commands\DivCommand;
use MathApp\commands\MultiCommand;
use MathApp\commands\SubCommand;
use Symfony\Component\Console\Application;

require __DIR__ . '/vendor/autoload.php';

$app = new Application();

$app->add( new AddCommand() );
$app->add( new SubCommand() );
$app->add( new DivCommand() );
$app->add( new MultiCommand() );

$app->run();