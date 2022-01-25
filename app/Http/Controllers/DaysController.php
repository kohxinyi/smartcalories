<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Day;
use App\Workout;
use App\Food;

class DaysController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            "day" => 'required'
        ]);

        $day = Day::create([
            'user_id' => Auth::id(),
            'days' => $request['day']
        ]);

        return redirect('home')->with('success', 'New day has been added');
    }

    public function index() {

        $user = Auth::user();
        $foods = $user->foods;
        $food = Food::all(['day_id']);
        $days = $user->days;
        $workouts = $user->workouts;
        $workout = Workout::find(1);
        //dd($food);
        
        return view('home', compact('foods', 'days', 'workouts', 'food', 'workout'));
    }
}
