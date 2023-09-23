<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function linechart()
    
    {
        // $hasil = DB::select(DB::raw(""));
        return view ('line-chart');
    }
}
