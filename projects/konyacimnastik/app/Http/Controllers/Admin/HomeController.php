<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendar()
    {
        return view('admin.calendar');
    }

    public function chatMessage()
    {
        return view('admin.chatMessage');
    }

    public function chatempty()
    {
        return view('admin.chatempty');
    }

    public function veiwDetails()
    {
        return view('admin.veiwDetails');
    }

    public function email()
    {
        return view('admin.email');
    }

    public function error1()
    {
        return view('admin.error');
    }

    public function faq()
    {
        return view('admin.faq');
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function kanban()
    {
        return view('admin.kanban');
    }

    public function pricing()
    {
        return view('admin.pricing');
    }

    public function termsCondition()
    {
        return view('admin.termsCondition');
    }

    public function widgets()
    {
        return view('admin.widgets');
    }

    public function chatProfile()
    {
        return view('admin.chatProfile');
    }

    public function blankPage()
    {
        return view('admin.blankPage');
    }

    public function comingSoon()
    {
        return view('admin.comingSoon');
    }

    public function starred()
    {
        return view('admin.starred');
    }

    public function testimonials()
    {
        return view('admin.testimonials');
    }

    public function maintenance()
    {
        return view('admin.maintenance');
    }

}
