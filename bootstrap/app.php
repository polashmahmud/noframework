<?php

use App\Core\App;
use League\Container\Container;

require '../vendor/autoload.php';

$container = new Container();

$container->addServiceProvider(new \App\Providers\AppServiceProvider());

var_dump($container->get('name'));

die();

$app = new App();
// register routes
$app->run();

