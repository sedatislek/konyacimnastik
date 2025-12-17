<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.addblog');
    }

    public function blog()
    {
        return view('admin.blog.blog');
    }

    public function blogDetails()
    {
        return view('admin.blog.blogdetails');
    }

}
