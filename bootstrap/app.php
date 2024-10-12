<?php

use App\Core\App;
use League\Container\Container;

require '../vendor/autoload.php';

$container = new Container();
$container->delegate(new \League\Container\ReflectionContainer());

$container->addServiceProvider(new \App\Providers\AppServiceProvider());

var_dump($container->get(\App\Core\Example::class));

die();

$app = new App();
// register routes
$app->run();

