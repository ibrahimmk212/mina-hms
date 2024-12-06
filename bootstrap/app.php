<?php

use App\Http\Middleware\NurseUserMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminUserMiddleware;
use App\Http\Middleware\DoctorUserMiddleware;
use App\Http\Middleware\PharmacistUserMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminUserMiddleware::class,
            'doctor' => DoctorUserMiddleware::class,
            'nurse' => NurseUserMiddleware::class,
            'pharmacist' => PharmacistUserMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
