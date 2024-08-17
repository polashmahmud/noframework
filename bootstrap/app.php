<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';
Ignition::make()->register();

// setup

$app = new App();
// register routes
$app->run();

