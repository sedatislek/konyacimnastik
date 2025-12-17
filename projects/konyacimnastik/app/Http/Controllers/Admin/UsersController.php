<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addUser()
    {
        return view('admin.users.addUser');
    }

    public function usersGrid()
    {
        return view('admin.users.usersGrid');
    }

    public function usersList()
    {
        return view('admin.users.usersList');
    }

    public function viewProfile()
    {
        return view('admin.users.viewProfile');
    }
}
