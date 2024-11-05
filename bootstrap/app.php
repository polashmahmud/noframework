<?php

use App\Core\App;
use App\Core\Container;

require '../vendor/autoload.php';

$container = Container::getInstance();
$container->delegate(new \League\Container\ReflectionContainer());

$container->addServiceProvider(new \App\Providers\AppServiceProvider());

$app = new App();
// register routes
$app->run();

