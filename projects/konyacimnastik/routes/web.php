<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';

Route::view('/', 'pages.home.index');
