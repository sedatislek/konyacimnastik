<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleandaccessController extends Controller
{
    // ADMIN → ROLE
    public function assignRole()
    {
        return view('admin.roleandaccess.assignRole', [
            'admins' => Admin::with('roles')->get(),
            'roles'  => Role::all(),
        ]);
    }

    public function assignRoleStore(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|exists:admins,id',
            'role_id'  => 'required|exists:roles,id',
        ]);

        Admin::findOrFail($request->admin_id)
            ->roles()
            ->sync([$request->role_id]);

        return response()->json(['success' => true]);
    }

    // ROLE → PERMISSION
    public function roleAaccess()
    {
        return view('admin.roleandaccess.roleAaccess', [
            'roles'       => Role::with('permissions')->get(),
            'permissions' => Permission::all(),
        ]);
    }

    public function updateRolePermissions(Request $request, Role $role)
    {
        $permissionIds = $request->input('permissions', []);
        $role->permissions()->sync($permissionIds);

        return back()->with('success', 'Yetkiler güncellendi');
    }
}
