<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PpdbController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });


Route::middleware(['auth', 'isAdmin'])->group(function () {
   Route::get('/dashboard', [AdminController::class, 'admin']);
   Route::get('/data-pendaftar', [PendaftaranController::class, 'index']);
   Route::get('/detail{id}', [PendaftaranController::class, 'detail']);
   Route::put('update-status/{id}', [PendaftaranController::class, 'updatestatus']);
   Route::resource('artikels', ArtikelController::class);
   Route::resource('gurus', GuruController::class);
   Route::resource('kegiatans', KegiatanController::class);
   Route::resource('kepala-sekolahs', KepalaSekolahController::class);
   Route::resource('keluhans', KeluhanController::class);
});


Route::get('/formulir-ppdb', [PpdbController::class, 'showFormulir'])->name('formulir.ppdb');
Route::post('/formulir', [PpdbController::class, 'createOrUpdate'])->name('submit.formulir.ppdb');
Route::get('/formulir/{id}/edit', [PpdbController::class, 'editFormulir'])->name('edit.formulir.ppdb');
Route::put('/formulir/{id}', [PpdbController::class, 'createOrUpdate'])->name('update.formulir.ppdb');
Route::delete('/formulir/{id}', [PpdbController::class, 'deleteFormulir'])->name('delete.formulir.ppdb');

Route::get('/dashboard-ppdb-siswa', [PpdbController::class, 'dashboard']);

// cetak kartu
Route::get('/cetak-kartu', [PpdbController::class, 'cetak_kartu']);
// Route::post('/update-daftar', [PpdbController::class, 'update'])->name('ppdb.update');



// Auth


// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk menampilkan form register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Route untuk proses register
Route::post('/register', [AuthController::class, 'register']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/profile-sekolah', [App\Http\Controllers\FrontendController::class, 'about']);
Route::get('/profile-guru', [App\Http\Controllers\FrontendController::class, 'profile_guru']);
Route::get('/galery-kegiatan', [App\Http\Controllers\FrontendController::class, 'galery_kegiatan']);
Route::get('/prestasi', [App\Http\Controllers\FrontendController::class, 'prestasi']);
Route::get('/kontak', [App\Http\Controllers\FrontendController::class, 'kontak']);
Route::post('/kontak1', [App\Http\Controllers\FrontendController::class, 'create'])->name('kontak.create');
Route::post('/kontak2', [App\Http\Controllers\FrontendController::class, 'create_kontak_2'])->name('kontak2.create_2');
Route::get('/prestasi/{id}', [App\Http\Controllers\FrontendController::class, 'prestasi_detail'])->name('prestasi.detail');

