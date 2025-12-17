<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function formLayout()
    {
        return view('admin.forms.layout');
    }

    public function formValidation()
    {
        return view('admin.forms.validation');
    }

    public function form()
    {
        return view('admin.forms.form');
    }

    public function wizard()
    {
        return view('admin.forms.wizard');
    }

}
