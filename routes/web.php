<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriFotoController;
use App\Http\Controllers\GaleriVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SloganController;
use App\Models\Pendaftaran;
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

Route::get('/', [HomeController::class, 'index'])->name('frontend.home.index');

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{pendaftaran}', [DashboardController::class, 'show'])->name('dashboard.pendaftaran.show');
    Route::get('/dashboard/{pendaftaran}/edit-status', [DashboardController::class, 'editStatus'])
        ->name('dashboard.pendaftaran.edit.status');
    Route::patch('/dashboard/{pendaftaran}/edit-status', [DashboardController::class, 'updateStatus'])
        ->name('dashboard.pendaftaran.update.status');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // profil
    Route::get('/admin/slogan', [SloganController::class, 'index'])->name('admin.slogan.index');

    Route::get('/admin/slogan/{slogan}/edit', [SloganController::class, 'edit'])->name('admin.slogan.edit');
    Route::patch('/admin/slogan/{slogan}', [SloganController::class, 'update'])->name('admin.slogan.update');

    // Galeri Foto
    Route::get('/admin/galeri-foto', [GaleriFotoController::class, 'index'])->name('admin.galeri.foto.index');

    Route::get('/admin/galeri-foto/create', [GaleriFotoController::class, 'create'])->name('admin.galeri.foto.create');
    Route::post('/admin/galeri-foto/create', [GaleriFotoController::class, 'store'])->name('admin.galeri.foto.store');

    Route::get('/admin/galeri-foto/{galeriFoto}/edit', [GaleriFotoController::class, 'edit'])->name('admin.galeri.foto.edit');
    Route::patch('/admin/galeri-foto/{galeriFoto}', [GaleriFotoController::class, 'update'])->name('admin.galeri.foto.update');

    Route::delete('/admin/galeri-foto/{galeriFoto}', [GaleriFotoController::class, 'destroy'])->name('admin.galeri.foto.destroy');

    // Galeri Video
    Route::get('/admin/galeri-video', [GaleriVideoController::class, 'index'])->name('admin.galeri.video.index');

    Route::get('/admin/galeri-video/create', [GaleriVideoController::class, 'create'])->name('admin.galeri.video.create');
    Route::post('/admin/galeri-video/create', [GaleriVideoController::class, 'store'])->name('admin.galeri.video.store');

    Route::get('/admin/galeri-video/{galeriVideo}/edit', [GaleriVideoController::class, 'edit'])->name('admin.galeri.video.edit');
    Route::patch('/admin/galeri-video/{galeriVideo}', [GaleriVideoController::class, 'update'])->name('admin.galeri.video.update');

    Route::delete('/admin/galeri-video/{galeriVideo}', [GaleriVideoController::class, 'destroy'])->name('admin.galeri.video.destroy');

    // profil
    Route::get('/admin/profil', [ProfilController::class, 'index'])->name('admin.profil.index');

    Route::get('/admin/profil/{profil}/edit', [ProfilController::class, 'edit'])->name('admin.profil.edit');
    Route::patch('/admin/profil/{profil}', [ProfilController::class, 'update'])->name('admin.profil.update');


    // Kelas
    Route::get('/admin/kelas', [KelasController::class, 'index'])->name('admin.kelas.index');

    Route::get('/admin/kelas/create', [KelasController::class, 'create'])->name('admin.kelas.create');
    Route::post('/admin/kelas/create', [KelasController::class, 'store'])->name('admin.kelas.store');

    Route::get('/admin/kelas/{kelas}', [KelasController::class, 'show'])->name('admin.kelas.show');

    Route::get('/admin/kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('admin.kelas.edit');
    Route::patch('/admin/kelas/{kelas}', [KelasController::class, 'update'])->name('admin.kelas.update');

    Route::delete('/admin/kelas/{kelas}', [KelasController::class, 'destroy'])->name('admin.kelas.destroy');

    // Pendaftaran
    // Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
});

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');


require __DIR__ . '/auth.php';
