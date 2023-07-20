<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Dashboard\AkunControllerr;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GaleriController;
use App\Http\Controllers\Dashboard\LaporanController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SuratKeluarController;
use App\Http\Controllers\Dashboard\SuratMasukController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function() {
    Route::prefix('/admin')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::resource('/surat-masuk', SuratMasukController::class);
        Route::resource('/surat-keluar', SuratKeluarController::class);
        Route::resource('/galeri', GaleriController::class);
        Route::resource('/profile', ProfileController::class);

        Route::get('/akun', [AkunControllerr::class, 'index'])->name('akun.index');
        Route::post('/akun/edit-avatar', [AkunControllerr::class, 'edit_avatar'])->name('edit-avatar');
        Route::post('/akun/edit-profile/{id}', [AkunControllerr::class, 'edit_profile'])->name('edit-profile');
        Route::post('/akun/edit-password/{id}', [AkunControllerr::class, 'edit_password'])->name('edit-password');


        Route::get('/cetak-laporan', [LaporanController::class, 'data'])->name('data');
        Route::post('/export', [LaporanController::class, 'export'])->name('export');
    });
});
