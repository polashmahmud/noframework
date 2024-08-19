<?php

use App\Core\App;
use League\Container\Container;
use Spatie\Ignition\Ignition;

require '../vendor/autoload.php';
Ignition::make()->register();

$container = new Container();

$container->add('name', function () {
    return 'John Doe';
});

var_dump($container->get('name'));

die();

$app = new App();
// register routes
$app->run();

