<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\BlogController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| All routes here require authentication + admin/super_admin role.
| Included from web.php via: require __DIR__.'/admin.php';
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // ----------------------------------------------------------------
        // Dashboard
        // ----------------------------------------------------------------
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // ----------------------------------------------------------------
        // Members
        // ⚠️  Custom routes MUST come before Route::resource() — otherwise
        // GET /admin/members/export is matched as {member} show route first.
        // ----------------------------------------------------------------
        Route::post('members/import', [MemberController::class, 'import'])->name('members.import');
        Route::get('members/export', [MemberController::class, 'export'])->name('members.export');
        Route::resource('members', MemberController::class);

        // ----------------------------------------------------------------
        // Events
        // Same pattern — registrations route before resource.
        // ----------------------------------------------------------------
        Route::get('events/{event}/registrations', [EventController::class, 'registrations'])
            ->name('events.registrations');
        Route::resource('events', EventController::class);

        // ----------------------------------------------------------------
        // Blog
        // ----------------------------------------------------------------
        Route::patch('blog/{post}/publish', [BlogController::class, 'publish'])->name('blog.publish');
        Route::patch('blog/{post}/unpublish', [BlogController::class, 'unpublish'])->name('blog.unpublish');
        Route::resource('blog', BlogController::class);

        // ----------------------------------------------------------------
        // Advertising  (stub — expand with Stripe integration later)
        // ----------------------------------------------------------------
        Route::prefix('advertising')->name('advertising.')->group(function () {
            Route::get('/', fn() => view('admin.advertising.index'))->name('index');
        });

        // ----------------------------------------------------------------
        // Accent on Excellence
        // ----------------------------------------------------------------
        Route::prefix('aoe')->name('aoe.')->group(function () {
            Route::get('/', fn() => view('admin.aoe.index'))->name('index');
        });

        // ----------------------------------------------------------------
        // Settings  (super_admin only sub-group)
        // ----------------------------------------------------------------
        Route::middleware('role:super_admin')
            ->prefix('settings')
            ->name('settings.')
            ->group(function () {
                Route::get('/', fn() => view('admin.settings.index'))->name('index');
                Route::get('/roles', fn() => view('admin.settings.roles'))->name('roles');
            });

    });
