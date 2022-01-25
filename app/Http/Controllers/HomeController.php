<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Goal;
use App\Workout;
use App\Exercise;
use App\Food;
use App\Day;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goal = Goal::all()->last();
        $user = Auth::user();
        $foods = $user->foods;
        $days = $user->days;
        $workouts = $user->workouts;
        //dd($days);
        
        return view('home', compact('goal','foods','days','workouts'));
    }
}
