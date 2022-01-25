<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weight;
use App\Profile;
use Auth;
use DB;

class WeightController extends Controller
{
    public function index(){
        $user = Auth::user();
        $profile = Profile::all();
        // $profiles = Profile::all();
        $weights = Weight::all();
        return view('weights.weight', compact('weights', 'profile'));
    }

    public function addData(Request $request){
        $weight = new Weight;
        $profile = Profile::find($id); 
        $weight->weight=$request->weight;
        $weight->date=$request->date;
        $weight->time=$request->time;
        $weight->profile()->associate($profile);
        $weight->save();
        return redirect('weight');
    }

    //
    public function insert(){
        $weight = getWeight();
        return view('weight');
    }

    //
    public function create(Request $request){
        // $rules = [
		// 	'first_name' => 'required|string|min:3|max:255',
		// 	'city_name' => 'required|string|min:3|max:255',
		// 	'email' => 'required|string|email|max:255'
		// ];
		$validator = Validator::make($request->all());
        // $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$weights = new Weight;
                $weights->weight = $data['weight'];
                $weights->date = $data['date'];
                $weights->time = $data['time'];
				$weights->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }

    // public function create()
    // {
    //     return view('weights.weight');
    // }

    public function store(Request $request) {
        
        $request->validate([
            "weight" => 'required',
            "date" => 'required',
            "time" => 'required',
        ]);

        $weight = Weight::create([
            'weight' => $request['weight'],
            'date' => $request['date'],
            'time' => $request['time'],
            'profile_id' => DB::table('profiles')->latest('id')->first(),
            // 'user_id' => Auth::id(),
        ]);

        return redirect('/weight')->with('success', 'New weight has been added');
    }

    public function show($id)
    {
        dd($id);
    }

    public function edit($id)
    {
        $user = Auth::user();
        $profiles = Profile::find($id);
        $weights = Weights::All();
        $weight = Weights::find($id);

        return view('weights.edit', compact('weights', 'weight', 'user', 'profiles'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            "weight" => 'required',
            "date" => 'required',
            "time" => 'required',
        ]);
        $update = Weight::where('id', $id)->update([
            'weight' => $request['weight'],
            'date' => $request['date'],
            'time' => $request['time'],
            'user_id' => Auth::id(),
            'profile_id' => Profile::id()
        ]);

        return redirect('/weight')->with('success', 'Update Successful.');
    }
}
