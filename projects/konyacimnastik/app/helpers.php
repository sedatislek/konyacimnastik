<?php

use App\Services\AdminPermissionService;

if (! function_exists('admin_can')) {
    function admin_can(string $permissionKey): bool
    {
        $admin = auth('admin')->user();

        if (! $admin) {
            return false;
        }

        return app(AdminPermissionService::class)
            ->can($admin, $permissionKey);
    }
}



if (! function_exists('admin_can')) {
    function admin_can(string $permissionKey): bool
    {
        $admin = auth('admin')->user();

        if (! $admin) {
            return false;
        }

        // ✅ SUPERADMIN BYPASS (ZORUNLU)
        if ($admin->roles && $admin->roles->contains('key', 'superadmin')) {
            return true;
        }

        return $admin->roles()
            ->whereHas('permissions', function ($q) use ($permissionKey) {
                $q->where('key', $permissionKey);
            })
            ->exists();
    }
}
