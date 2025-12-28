<?php

namespace App\Providers;

use App\Services\AdminPermissionService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        // Superadmin her şeyi görür
        Gate::before(function ($user) {
            if (
                auth('admin')->check() &&
                auth('admin')->user()
                    ->roles
                    ->contains('key', 'superadmin')
            ) {
                return true;
            }
        });

        // Genel permission kontrolü
        Gate::define('permission', function ($user, string $permissionKey) {
            return admin_can($permissionKey);
        });
    }
}
