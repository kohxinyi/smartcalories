<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartControllerLine extends Controller
{
    public function lineChart(){
        return view ('line-chart');
    }
}
