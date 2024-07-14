<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // Other middleware entries...
            \App\Http\Middleware\RedirectIfAuthenticated::class,
            // Ensure this middleware is applied after other global middleware.
        ],
    ];

    // Rest of the class...
}
