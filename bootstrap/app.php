<?php

use Illuminate\Foundation\Application;
// ...existing code...

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);

        // Register middleware aliases for Spatie permission package if available,
        // otherwise register local fallback middleware.
        if (class_exists(\Spatie\Permission\Middlewares\RoleMiddleware::class)) {
            $middleware->alias([
                'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
                'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
                'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
            ]);
        } else {
            $middleware->alias([
                'role' => \App\Http\Middleware\EnsureUserHasRole::class,
            ]);
        }
    })
    ->withExceptions(function ($exceptions): void {
        //
    })->create();