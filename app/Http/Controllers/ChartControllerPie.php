<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartControllerPie extends Controller
{
    public function pieChart(){
        return view ('pie');
    }
}
