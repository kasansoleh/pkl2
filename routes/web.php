<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoDudiController;
use App\Http\Controllers\DaftarPklController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DataDudiController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman depan
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk authentication siswa
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk dashboard setelah login
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth:siswa')
    ->name('dashboard');

// Route untuk info DUDI
Route::get('/info-dudi', [InfoDudiController::class, 'index'])
    ->middleware('auth:siswa')
    ->name('info-dudi');

// Route untuk daftar PKL
Route::get('/daftar-pkl', [DaftarPklController::class, 'index'])
    ->middleware('auth:siswa')
    ->name('daftar-pkl');

Route::get('/tambah-permohonan', [DaftarPklController::class, 'create'])
    ->middleware('auth:siswa')
    ->name('tambah-permohonan');

Route::post('/tambah-permohonan', [DaftarPklController::class, 'store'])
    ->middleware('auth:siswa')
    ->name('tambah-permohonan.store');

// Route untuk halaman admin
Route::prefix('admin')->group(function () {
    // Route untuk beranda admin
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin.index');
    
    // Login routes
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    
    // Dashboard route
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])
        ->middleware('auth:admin')
        ->name('admin.dashboard');
    
    // Data DUDI routes
    Route::get('/data-dudi', [DataDudiController::class, 'index'])
        ->middleware('auth:admin')
        ->name('admin.data-dudi');
    
    Route::get('/tambah-dudi', [DataDudiController::class, 'create'])
        ->middleware('auth:admin')
        ->name('admin.tambah-dudi');
    
    Route::post('/tambah-dudi', [DataDudiController::class, 'store'])
        ->middleware('auth:admin')
        ->name('admin.tambah-dudi.store');
    
    Route::get('/edit-dudi/{id}', [DataDudiController::class, 'edit'])
        ->middleware('auth:admin')
        ->name('admin.edit-dudi');
    
    Route::put('/update-dudi/{id}', [DataDudiController::class, 'update'])
        ->middleware('auth:admin')
        ->name('admin.update-dudi');
    
    Route::delete('/hapus-dudi/{id}', [DataDudiController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('admin.hapus-dudi');

    // Data Siswa routes
    Route::get('/data-siswa', function () {
        return view('admin.students.index');
    })->middleware('auth:admin')->name('admin.data-siswa');

    // Resource route untuk students
    Route::resource('students', StudentController::class)->middleware('auth:admin');
});