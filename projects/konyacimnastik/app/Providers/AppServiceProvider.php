<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::if('permission', function ($permission) {
            return admin_can($permission);
        });

        Gate::before(function ($admin, $ability) {
            if (
                auth('admin')->check() &&
                auth('admin')->user()?->roles->contains('key', 'superadmin')
            ) {
                return true;
            }
        });

        Gate::define('permission', function ($admin, $permissionKey = null) {
            if (! is_string($permissionKey)) {
                return false;
            }

            return admin_can($permissionKey);
        });

    }
}
