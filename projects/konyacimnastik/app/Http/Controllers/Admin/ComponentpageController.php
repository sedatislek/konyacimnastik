<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentpageController extends Controller
{
    public function alert()
    {
        return view('admin.componentpage.alert');
    }

    public function avatar()
    {
        return view('admin.componentpage.avatar');
    }

    public function badges()
    {
        return view('admin.componentpage.badges');
    }

    public function button()
    {
        return view('admin.componentpage.button');
    }

    public function calendar()
    {
        return view('admin.componentpage.calendar');
    }

    public function card()
    {
        return view('admin.componentpage.card');
    }

    public function carousel()
    {
        return view('admin.componentpage.carousel');
    }

    public function colors()
    {
        return view('admin.componentpage.colors');
    }

    public function dropdown()
    {
        return view('admin.componentpage.dropdown');
    }

    public function imageUpload()
    {
        return view('admin.componentpage.imageUpload');
    }

    public function list()
    {
        return view('admin.componentpage.list');
    }

    public function pagination()
    {
        return view('admin.componentpage.pagination');
    }

    public function progress()
    {
        return view('admin.componentpage.progress');
    }

    public function radio()
    {
        return view('admin.componentpage.radio');
    }

    public function starRating()
    {
        return view('admin.componentpage.starRating');
    }

    public function switch()
    {
        return view('admin.componentpage.switch');
    }

    public function tabs()
    {
        return view('admin.componentpage.tabs');
    }

    public function tags()
    {
        return view('admin.componentpage.tags');
    }

    public function tooltip()
    {
        return view('admin.componentpage.tooltip');
    }

    public function typography()
    {
        return view('admin.componentpage.typography');
    }

    public function videos()
    {
        return view('admin.componentpage.videos');
    }

}
