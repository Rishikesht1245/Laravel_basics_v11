<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

/* :: used to access the method present inside the Application Class 
without instantiating a object for the class */
return Application::configure(basePath: dirname(__DIR__))
// invocking the methods returned by the configure method of Application
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware configurations will come here.
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
