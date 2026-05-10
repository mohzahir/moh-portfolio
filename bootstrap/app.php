<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // هذا السطر السحري سيحل مشكلة الـ 401 للأبد
        $middleware->trustProxies(at: '*');
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();