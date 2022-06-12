<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FRSController;
use App\Http\Controllers\UktController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\IkomaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IpsIpkController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DosenBioController;
use App\Http\Controllers\DosenFRSController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\YudisiumController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\SuratCutiController;
use App\Http\Controllers\TranskripController;
use App\Http\Controllers\DaftarMhsMkController;
use App\Http\Controllers\AdminBiodataController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\MahasiswaFRSController;
use App\Http\Controllers\UnggahBahasaController;
use App\Http\Controllers\AdminKuesionerController;
use App\Http\Controllers\AdminKurikulumController;
use App\Http\Controllers\AdminSchedule;
use App\Http\Controllers\AdminTranskripController;
use App\Http\Controllers\DosenTranskripController;
use App\Http\Controllers\SuratMahasiswaController;
use App\Http\Controllers\SuratUndurDiriController;
use App\Http\Controllers\BiayaPendidikanController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DosenNilaiController;  
use App\Http\Controllers\SuratKeteranganAktifController;



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


// untuk mahasiswa
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

    Route::get('/search/ips',[IpsIpkController::class,'search'])->name('search.ips');

    Route::resource('/jadwal',ScheduleController::class);

    Route::get('/proses',[ProsesController::class,'index']);

    Route::get('/kuesioner',[KuesionerController::class,'index']);

    Route::get('/suratundurdiri',[SuratUndurDiriController::class,'index']);
    Route::post('/suratundurdiri/simpan',[SuratUndurDiriController::class,'simpan']);

    Route::get('/suratcuti',[SuratCutiController::class,'index']);
    Route::post('/suratcuti/simpan',[SuratCutiController::class,'simpan']);

    Route::get('/suratmahasiswa',[SuratMahasiswaController::class,'index']);

    Route::get('/suratketeranganaktif',[SuratKeteranganAktifController::class,'index']);
    
    Route::post('/suratketeranganaktif/simpan',[SuratKeteranganAktifController::class,'simpan']);

    Route::get('/ikoma',[IkomaController::class,'index']);

    Route::get('/ukt',[UktController::class,'index']);

    Route::get('/ikoma',[IkomaController::class,'index']);

    Route::get('/ukt',[UktController::class,'index']);

    Route::get('/ikoma',[IkomaController::class,'index']);

    Route::get('/ukt',[UktController::class,'index']);

    Route::resource('/frs',MahasiswaFRSController::class);

    Route::get('/biayapendidikan',[BiayaPendidikanController::class,'index']);

    Route::get('/akademik',[AkademikController::class,'index']);

    Route::get('/ipsipk',[IpsIpkController::class,'index']);

    Route::get('/transkrip',[TranskripController::class,'index']);

    Route::get('/laporan',[LaporanController::class,'index']);

    Route::get('/daftarmhsmk',[DaftarMhsMkController::class,'index']);

    Route::get('/jadwalkuliah',[JadwalKuliahController::class,'index']);

    Route::get('/yudisium',[YudisiumController::class,'index']);

    Route::get('/unggahbahasa',[UnggahBahasaController::class,'indexMahasiswa']);

    Route::get('/kelas',[ClassroomController::class,'indexMahasiswa']);

    Route::get('/kelas/{kelas:id}',[ClassroomController::class,'showMahasiswa']);

    Route::resource('/mahasiswa/biodata',AdminBiodataController::class);

    Route::get('/cetak/surat',function(){
        return view('suratMahasiswa',['title'=>'Cetak Surat','surat']); 
    });

});




// untuk login logout
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


// untuk admin
    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    // Route::get('/adminbiodata',[AdminController::class,'biodata'])->name('adminbiodata');
    Route::resource('/admin/transkrip',AdminTranskripController::class);
    Route::resource('/admin/biodata',AdminBiodataController::class);
    Route::resource('/admin/schedule',AdminSchedule::class);
    Route::resource('/admin-kurikulum',AdminKurikulumController::class);
    // Route::get('/search',[AdminKurikulumController::class,'search'])->name('adminsearch');
    Route::get('/adminsearch',[CourseController::class,'search']);
    Route::resource('/admin-kuesioner',AdminKuesionerController::class);
    Route::get('admin/surat/cuti',[SuratCutiController::class,'indexAdmin']);
    Route::get('admin/acc/surat/cuti/{nrp}',[SuratCutiController::class,'accept']);
    Route::get('admin/reject/surat/cuti/{nrp}',[SuratCutiController::class,'reject']);

});


// untuk dosen
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
    Route::resource('dosen/kurikulum',CourseController::class);
    Route::resource('/dosen/jadwal',ScheduleController::class);
    Route::get('dosensearch',[CourseController::class,'search'])->name('search');
    Route::get('dosen-kelas',[ClassroomController::class,'indexDosen'])->name('dosen.kelas');
    Route::get('/dosen-kelas/{kelas:id}',[ClassroomController::class,'showMahasiswa']);
    Route::resource('/dosen-nilai',ClassroomController::class);
    Route::get('/dosen/{user:nrp}/{classroon:id}/edit',[DosenNilaiController::class,'editNilai'])->name('dosen.nilai.edit');

});

// untuk halaman error(jika user tidak memiliki hak akses)
Route::get('/restricted', function () {
    return view('error');
})->name('error');


