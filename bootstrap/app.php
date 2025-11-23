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
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        $middleware->alias([
        'isAdmin' => App\Http\Middleware\isAdministrator::class,
        'isDokter' => App\Http\Middleware\isDokter::class,
        'isResepsionis' => App\Http\Middleware\isResepsionis::class,
        ]);
=======
        //
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
