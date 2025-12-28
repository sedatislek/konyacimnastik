<?php

namespace App\Services;

use App\Models\Admin;

class AdminPermissionService
{
    public function can(Admin $admin, string $permissionKey): bool
    {
        // Super admin her şeyi yapar
        if ($admin->roles->contains('key', 'superadmin')) {
            return true;
        }

        // Yetki kontrolü
        return $admin->roles()
            ->whereHas('permissions', function ($q) use ($permissionKey) {
                $q->where('key', $permissionKey);
            })
            ->exists();
    }
}
