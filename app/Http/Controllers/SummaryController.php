<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Summary;
use DB;

class SummaryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $summaries = Summary::all();
        // $user->profile()->get();
        $profile = DB::table('profiles')->where('user_id', '=', $user->get('id'));
        return view('summaries.summary', compact('summaries','profile','user'));
        // return view('summaries.summary', compact('summaries'));

    }

    public function create()
    {
        return view('summaries.summary');
    }

    public function store(Request $request) {
        
        $request->validate([
        ]);

        $summary = Summary::create([
            'user_id' => Auth::id(),
            'profile_id' => Profile::id()
        ]);

        return redirect('/summary')->with('success', 'New summary has been added');
    }


    //try stackO
    public function fetchProfile(){
        $user = Auth::user();
        // $user = Auth::find($user->id);
        if($user){ 
            return $user->profile()->get();
        }
    }
}
