<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\AppServiceProvider;
use App\Providers\ConfigServiceProvider;

require '../vendor/autoload.php';

$container = Container::getInstance();
$container->delegate(new \League\Container\ReflectionContainer());

$container->addServiceProvider(new ConfigServiceProvider());
$container->addServiceProvider(new AppServiceProvider());

var_dump($container->get(Config::class)->get('app.name'));
die();

$app = new App();
// register routes
$app->run();

