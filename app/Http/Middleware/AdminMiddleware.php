<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * AdminMiddleware
 * 
 * Restricts access to the /admin route group.
 * Requires the authenticated user to have the 'admin' or 'super_admin' role
 * as defined by Spatie Laravel Permission.
 * 
 * Usage — register in bootstrap/app.php (Laravel 11) or Kernel.php (Laravel 10):
 * 
 *   ->withMiddleware(function (Middleware $middleware) {
 *       $middleware->alias(['admin' => \App\Http\Middleware\AdminMiddleware::class]);
 *   })
 * 
 * Then use on routes:
 *   Route::middleware(['auth', 'admin'])->prefix('admin')->group(...)
 */
class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Must be authenticated first
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        // Must have admin or super_admin role
        if (! auth()->user()->hasAnyRole(['admin', 'super_admin'])) {
            abort(403, 'You do not have permission to access the admin area.');
        }

        return $next($request);
    }
}
