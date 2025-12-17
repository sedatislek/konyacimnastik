<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AiapplicationController extends Controller
{
    public function codeGenerator()
    {
        return view('admin.aiapplication.codegenerator');
    }

    public function codeGeneratorNew()
    {
        return view('admin.aiapplication.codegeneratornew');
    }

    public function imageGenerator()
    {
        return view('admin.aiapplication.imagegenerator');
    }

    public function textGenerator()
    {
        return view('admin.aiapplication.textgenerator');
    }

    public function textGeneratorNew()
    {
        return view('admin.aiapplication.textgeneratornew');
    }

    public function videoGenerator()
    {
        return view('admin.aiapplication.videogenerator');
    }

    public function voiceGenerator()
    {
        return view('admin.aiapplication.voicegenerator');
    }

}
