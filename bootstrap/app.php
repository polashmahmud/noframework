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

$config = $container->get(Config::class);

foreach ($config->get('app.providers') as $provider) {
    $container->addServiceProvider(new $provider);
}

$app = new App();
// register routes
$app->run();

