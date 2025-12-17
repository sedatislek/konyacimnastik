<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function forgotPassword()
    {
        return view('admin.aiapplication.forgotpassword');
    }

    public function signIn()
    {
        return view('admin.aiapplication.signin');
    }

    public function signUp()
    {
        return view('admin.aiapplication.signup');
    }
}
