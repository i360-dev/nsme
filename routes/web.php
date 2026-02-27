<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ⚠️  IMPORTANT: admin.php MUST be required before the wildcard routes
| below, otherwise {first}/{second} will shadow /admin/* routes.
|--------------------------------------------------------------------------
*/
require __DIR__.'/admin.php';

Route::get('/', [RoutingController::class, 'index'])->name('root');

Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])
    ->name('second')
    ->where('first', '^(?!admin).*$');  // Prevent shadowing /admin/* routes

Route::get('{any}', [RoutingController::class, 'root'])
    ->name('any')
    ->where('any', '^(?!admin|login|register|logout|password|email|oauth).*$');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
