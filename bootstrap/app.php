<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\ConfigServiceProvider;
use Dotenv\Dotenv;
use Laminas\Diactoros\Request;
use Laminas\Diactoros\Response;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Container\ReflectionContainer;
use League\Route\Router;

require '../vendor/autoload.php';

$dotEnv = Dotenv::createImmutable(__DIR__ . '/../');
$dotEnv->load();

$container = Container::getInstance();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new ConfigServiceProvider());

$config = $container->get(Config::class);

foreach ($config->get('app.providers') as $provider) {
    $container->addServiceProvider(new $provider);
}

$app = new App($container);

(require '../routes/web.php')($app->getRouter(), $container);

$app->run();

