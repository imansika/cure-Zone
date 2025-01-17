<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use function PHPUnit\Framework\callback;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(callback:function (Middleware $middleware):void {
        $middleware->validateCsrfTokens(except:[
            'login',
            'register',
            'profile',
            'category',
            'category/',
            'category/*',

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
