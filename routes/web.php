<?php

use Laminas\Diactoros\Response;
use League\Route\Router;
use Psr\Container\ContainerInterface;

return static function (Router $router, ContainerInterface $container) {
    $router->get('/', function () {
        $response = new Response();

        $response->getBody()->write('<h1>Home Page</h1>');

        return $response;
    });

    $router->get('/about', function () {
        $response = new Response();

        $response->getBody()->write('<h1>About Page</h1>');

        return $response;
    });
};