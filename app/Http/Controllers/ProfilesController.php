<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Weight;
use DateTime;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles = Profile::all();
        $weights = Weight::all();
        return view('profiles.profile', compact('profiles','weights'));
        // return view('profiles.profile', compact('profiles'));

    }

    //learning point
    public function addProfile()
    {
        $profile = new Profile();
        $profile->user_id = 1;
        $profile->name = "Jon";
        $profile->age = 28;
        $profile->gender = 'Male';
        $profile->height = 171;
        $profile->exercise = 'Often';
        $profile->save();

        return "Profile added successfully";
    }

    // public function addWeight($id)
    // {
    //     $profile = Profile::find($id);

    //     $weight = new Weight();
    //     $weight->weight = 54.6;
    //     $weight->date = "2022-01-22";
    //     $weight->time = "13:21:26";
    //     $profile->weights()->save($weights);

    //     return view('weights.weight');
    // }

    // public function addWeight($id, Request $request)
    // {
    //     return view('weights.weight');
    // }

    public function addWeight($id, Request $request)
    {
        $profile = Profile::find($id);

        $weight = new Weight();
        $weight->weight = $request->weight;
        $weight->date = $request->date;
        $weight->time = $request->time;
        $profile->weights()->save($weight);

        return back() -> with('weight_add', 'Weight added successfully');
    }

    // public function editWeight($id){
    //     $weights = DB::table('weights')->where('id',$id)->first();
    //     // return view('edit-weight',compact('weights'));
    //     return view('weights.weight',compact('weights'));
    // }

    public function getWeightByProfileId($id)
    {
        $weight = Profile::find($id)->weights;
        return $weight;
    }

    //end learning point



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $request->validate([
            "name" => 'required',
            "age" => 'required',
            "gender" => 'required',
            "height" => 'required',
            // "weight" => 'required',
            "exercise" => 'required'
        ]);

        $profile = Profile::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'height' => $request['height'],
            // 'weight' => $request['weight'],
            'exercise' => $request['exercise'],
            'user_id' => Auth::id()
        ]);

        return redirect('/profile')->with('success', 'New profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $profiles = Profile::All();
        $profile = Profile::find($id);
        //dd($profile);

        return view('profiles.edit', compact('profiles', 'profile', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            "name" => 'required',
            "age" => 'required',
            "gender" => 'required',
            "height" => 'required',
            // "weight" => 'required',
            "exercise" => 'required'
        ]);
        $update = Profile::where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'height' => $request['height'],
            // 'weight' => $request['weight'],
            'exercise' => $request['exercise'],
            'user_id' => Auth::id()
        ]);

        return redirect('/profile')->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function generate($id)
    {
        $profiles = Profile::findOrFail($id);
        $qrText = $profiles->get();
        $qrcode = QrCode::size(400)->generate($qrText);
        return view('qrcode', compact('qrcode'));
    }
}
