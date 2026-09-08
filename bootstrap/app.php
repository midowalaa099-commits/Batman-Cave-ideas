<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        if (getenv('VERCEL')) {
            $middleware->trustProxies(at: '*');
        }

        $middleware->redirectGuestsTo('/login');
        $middleware->redirectUsersTo('/ideas');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        if (getenv('VERCEL')) {
            $exceptions->report(function (Throwable $exception): bool {
                error_log(sprintf(
                    '[laravel] %s: %s in %s:%d',
                    $exception::class,
                    $exception->getMessage(),
                    $exception->getFile(),
                    $exception->getLine(),
                ));

                return false;
            });
        }

        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
