<?php

use App\Models\Admin;

if (! function_exists('admin_can')) {
    function admin_can(string $permissionKey): bool
    {
        $admin = auth('admin')->user();

        if (! $admin) {
            return false;
        }

        // Super Admin bypass
        if ($admin->roles->contains('key', 'superadmin')) {
            return true;
        }

        return $admin->roles()
            ->whereHas('permissions', function ($q) use ($permissionKey) {
                $q->where('key', $permissionKey);
            })
            ->exists();
    }
}

