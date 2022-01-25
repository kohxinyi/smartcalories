<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodDatabase;
use Auth;

class FoodDatabaseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $food = FoodDatabase::all();
        return view('foodDatabase.foodDatabase', compact('food'));

    }

    public function search() {
        $search_text = $_GET['query'];
        $min_cal = $_GET['min_calories'];
        $max_cal = $_GET['max_calories'];

        $food = FoodDatabase::where('name', 'LIKE', '%'.$search_text.'%')
        ->whereBetween('Calories', [$min_cal, $max_cal])
        ->get();

        return view('foodDatabase.search', compact('food'));
    }

}
