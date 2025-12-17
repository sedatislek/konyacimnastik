<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableBasic()
    {
        return view('admin.table.basic');
    }

    public function tableData()
    {
        return view('admin.table.data');
    }

}
