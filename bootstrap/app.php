<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Determine which .env file to load
$envFile = getenv('APP_ENV') === 'production' ? '.env.production' : '.env.local';

// Load the appropriate .env file
$basePath = dirname(__DIR__);
if (file_exists($basePath . '/' . $envFile)) {
    $app = Application::configure(basePath: $basePath)
        ->loadEnvironmentFrom($envFile);
} else {
    // Fallback to default .env file if the specified one doesn't exist
    $app = Application::configure(basePath: $basePath);
}

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
