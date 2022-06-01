<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\DosenBioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBiodataController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\AdminTranskripController;
use App\Http\Controllers\DosenTranskripController;

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

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.desaindashboard.dashboard',['title'=>"Dashboard"]);
    })->name('dashboard');
    
    Route::get('/', function () {
        return view('dashboard.desaindashboard.dashboard',['title'=>"Home"]);
    })->name('home');

    Route::resource('/biodata',DashboardBioController::class);

    Route::get('/transkrip/{user:name}',[ScoreController::class,'transkrip']);



});


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    // Route::get('/adminbiodata',[AdminController::class,'biodata'])->name('adminbiodata');
    Route::resource('/admin/transkrip',AdminTranskripController::class);
    Route::resource('/admin/biodata',AdminBiodataController::class);

});


Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen',[DosenController::class,'index'])->name('dosen');
    Route::resource('/dosen/biodata',DosenBioController::class);
    Route::resource('/dosen/transkrip',DosenTranskripController::class);
});


Route::get('/restricted', function () {
    return view('error');
})->name('error');


