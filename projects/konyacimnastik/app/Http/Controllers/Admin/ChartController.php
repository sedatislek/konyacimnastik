<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function columnChart()
    {
        return view('admin.chart.columnchart');
    }

    public function lineChart()
    {
        return view('admin.chart.linechart');
    }

    public function pieChart()
    {
        return view('admin.chart.piechart');
    }
}
