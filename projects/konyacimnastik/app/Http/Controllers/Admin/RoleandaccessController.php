<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleandaccessController extends Controller
{
    public function assignRole()
    {
        return view('admin.roleandaccess.assignRole');
    }

    public function roleAaccess()
    {
        return view('admin.roleandaccess.roleAaccess');
    }
}
