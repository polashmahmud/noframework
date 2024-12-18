<?php

return [
    'name' => env('APP_NAME'),

    'debug' => env('APP_DEBUG'),

    'providers' => [
        \App\Providers\AppServiceProvider::class,
        \App\Providers\RequestServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ViewServiceProvider::class
    ]
];