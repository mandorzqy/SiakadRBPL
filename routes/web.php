<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DosenBioController;
use App\Http\Controllers\DosenFRSController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AdminBiodataController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\AdminTranskripController;
use App\Http\Controllers\DosenTranskripController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\FRSController;
use App\Http\Controllers\KuesionerController;

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

    Route::resource('/kurikulum',CourseController::class);
    Route::get('/search',[CourseController::class,'search'])->name('search');
    Route::get('/search-jadwal',[ScheduleController::class,'search'])->name('hari');
    Route::resource('/jadwal',ScheduleController::class);
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
    Route::get('/dosen',function () {
        return view('dosen.dosenDashboard.index',['title'=>"Dashboard"]);
    })->name('dosen');
    Route::resource('/dosen/biodata',DosenBioController::class);
    Route::resource('/dosen/transkrip',DosenTranskripController::class);
    Route::get('dosen/frs',[DosenFRSController::class,'index'])->name('frs');
    Route::get('dosen/frs/{user:nrp}',[DosenFRSController::class,'show'])->name('frs.show');
    Route::get('/search/frs/{nrp}',[DosenFRSController::class,'search'])->name('frs.search');
    Route::post('dosen/frs/accept/{user:id}',[DosenFRSController::class,'accept'])->name('frs.accept');
});


Route::get('/restricted', function () {
    return view('error');
})->name('error');

Route::get('/proses',[ProsesController::class,'index']);

Route::get('/frs',[FRSController::class,'index']);

Route::get('/kuesioner',[KuesionerController::class,'index']);




