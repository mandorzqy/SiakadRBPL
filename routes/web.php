<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBioController;

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

Route::get('/', function () {
    return view('dashboard.index',['title'=>"Dashboard"]);
})->middleware('auth');

// Route::get('/dashboard',function(){
//     return view('dashboard.index');
// })->middleware('auth');

// Route::get('/biodata',function(){
//     return view('biodata.index');
// })->middleware('auth');

Route::get('/register',[RegisterController::class,'create'])->middleware('auth');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::resource('/biodata',DashboardBioController::class)->middleware('auth');

// Route::resource('/frs',[ScoreController::class,'user'])->middleware('auth');
Route::get('/transkrip/{user:name}',[ScoreController::class,'transkrip'])->middleware('auth');

