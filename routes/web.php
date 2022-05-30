<?php

use App\Http\Controllers\AdminBiodataController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index',['title'=>"Dashboard"]);
})->name('dashboard')->middleware('auth');

Route::get('/', function () {
    return view('dashboard.desaindashboard.dashboard',['title'=>"Home"]);
})->name('home')->middleware('auth');





Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::resource('/biodata',DashboardBioController::class)->middleware('auth');

// Route::resource('/frs',[ScoreController::class,'user'])->middleware('auth');
Route::get('/transkrip/{user:name}',[ScoreController::class,'transkrip'])->middleware('auth');





//admin

// Route::get('/admin',[AdminController::class,'index']);
// Route::get('/adminbiodata',[AdminController::class,'biodata']);
// Route::get('/admin-transkrip',[AdminController::class,'transkrip']);


    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    // Route::get('/adminbiodata',[AdminController::class,'biodata'])->name('adminbiodata');
    Route::get('/admin-transkrip',[AdminController::class,'transkrip'])->name('admin-transkrip');
    Route::resource('/admin/biodata',AdminBiodataController::class);

});


Route::get('/restricted', function () {
    return view('error');
})->name('error');