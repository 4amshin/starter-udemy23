<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public static $permission = [
        //user management
        'dashboard' => ['superadmin', 'admin'],
        // 'index-user' => ['superadmin', 'admin'],
        // 'show-user' => ['superadmin', 'admin'],
        // 'create-user' => ['superadmin'],
        // 'store-user' => ['superadmin'],
        // 'edit-user' => ['superadmin'],
        // 'update-user' => ['superadmin'],
        // 'destroy-user' => ['superadmin'],
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();
    }
}
