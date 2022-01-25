<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartControllercopy;
use App\Http\Controllers\ChartController ;
use App\Http\Controllers\CaloriesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\QrCodeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::resource('goals', 'GoalsController')->middleware('auth');
Route::resource('foods', 'FoodsController')->middleware('auth');
Route::resource('workouts', 'WorkoutsController')->middleware('auth');
Route::resource('days', 'DaysController')->middleware('auth');
Route::resource('profile', 'ProfilesController')->middleware('auth');
Route::resource('weight', 'WeightController')->middleware('auth');
Route::resource('summary', 'SummaryController')->middleware('auth');
Route::resource('foodDatabase', 'FoodDatabaseController')->middleware('auth');
Route::get('/search', 'FoodDatabaseController@search')->name('search');

Route::get('add-profile', [ProfilesController::class,'addProfile'])->middleware('auth');
Route::get('add-weight/{id}', [ProfilesController::class,'addWeight'])->middleware('auth');
Route::post('add-weight/{id}',[ProfilesController::class,'addWeight'])->middleware('auth');
Route::get('get-weight-by-profile/{id}', [ProfilesController::class,'getWeightByProfileId'])->middleware('auth');

Route::get('fetchProfile', [SummaryController::class,'fetchProfile'])->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/pie',[ChartControllerPie::class,'pieChart']);
Route::get('/line',[ChartControllerLine::class,'lineChart']);

Route::get('/caloriesCalculator', function () {
    return view('caloriesCalculator');
});

Route::post('/calories/calculation',[CaloriesController::class,'calculate']);


Route::get('/bmiCalculator', function () {
    return view('bmiCalculator');
});

Route::get('/leaderboard', function () {
    return view('leaderboard');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Overview', function () {
    return view('Overview');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'DaysController@index')->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

Route::get('/tespdf', function() {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();  
});

Route::get('/Overview', function () {
    return view('Overview');
});

Route::get('qrcode/{id}', [ProfilesController::class, 'generate'])->name('generate');

Route::get('/qrscanner', function () {
    return view('qrscanner');
});