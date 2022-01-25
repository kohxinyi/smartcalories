<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Food;
use App\Day;
use Auth;

class CaloriesController extends Controller
{

    public function calculate(Request $req) {

        $gender = $req->gender;
        $age = $req->age;
        $weight = $req->weight;
        $height = $req->height;
        $exeL = $req->exerciseLevel;

        if($gender=="male"){
            $s = round((9.99*$weight) + (6.25*$height) - (4.92*$age)+5);
        }else{
            $s = round((9.99*$weight) + (6.25*$height) - (4.92*$age)-161);
        }

        if($exeL==0){
            $r = $s;
            $exeLDesc = "Basal Metabolic Rate (BMR)";

        }elseif($exeL==1){
            $r = $s * 1.2;
            $exeLDesc = "Little/No exercise";

        }elseif($exeL==2){
            $r = $s * 1.35;
            $exeLDesc = "Low activity (exercise 1-3 times/week)";

        }elseif($exeL==3){
            $r = $s * 1.55;
            $exeLDesc = "Active (daily exercise or intense exercise 3-4 times/week)";

        }elseif($exeL==4){
            $r = $s * 1.75;
            $exeLDesc = "High activity (intense exercise 6-7 times/week)";

        }elseif($exeL==5){
            $r = $s * 1.95;
            $exeLDesc = "Very high activity (very intense exercise daily, or physical job)";
        }

        $maintain_weight = $r;
        $weight_loss = round($r*0.80);
        $weight_gain = round($r*1.20);

        $id = DB::table('calories')->insertGetId([
            'c_gender'         => $gender,
            'c_age'            => $age,
            'c_weight'         => $weight,
            'c_height'         => $height,
            'c_exercise_level' => $exeLDesc,
            'c_maintain_weight'=> $maintain_weight,
            'c_weight_loss'    => $weight_loss,
            'c_weight_gain'    => $weight_gain,

        ]);

        $calories= DB::table('calories')->where('c_id', $id)->first();

        return view('caloriesCalculator',compact("calories"));
    }

}
