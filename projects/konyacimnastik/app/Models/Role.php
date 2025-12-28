<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $fillable = ['name', 'key', 'status'];

    public function permissions()
    {
        return $this->belongsToMany(
            Permission::class,
            'permission_role',   // ✅ SENİN TABLO
            'role_id',
            'permission_id'
        );
    }

    // ROLE → ADMINS
    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(
            Admin::class,
            'admin_role'
        );
    }
}
