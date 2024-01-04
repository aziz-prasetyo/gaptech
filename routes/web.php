<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CalonAnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LandingController;

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

// Route sementera buat Detail Artikel
// Route::get('/detail-artikel/artikel-id-1', function() {
//     return view('artikel.detail-example', ['artikel' => null, 'galeri' => null]);
// })->name('artikel.detail.example');
// ------------------------------------------------------------------------------

Route::resource('/', LandingController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('calonanggota', CalonAnggotaController::class);
    Route::resource('kontak', KontakController::class);
    Route::post('artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');
    Route::post('galeri/search', [GaleriController::class, 'search'])->name('galeri.search');
    Route::post('calonanggota/search', [CalonAnggotaController::class, 'search'])->name('calonanggota.search');
    Route::post('kontak/search', [KontakController::class, 'search'])->name('kontak.search');
});

Route::resource('calonanggota', CalonAnggotaController::class)->only(['store']);
Route::resource('kegiatan', KegiatanController::class)->only(['create', 'store', 'show']);
Route::resource('kontak', KontakController::class)->only(['store']);
Route::resource('artikel', ArtikelController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
Route::resource('galeri', GaleriController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);

require __DIR__ . '/auth.php';
