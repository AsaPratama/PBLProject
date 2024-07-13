<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogKeluarController;
use App\Http\Controllers\LogMasukController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
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

Route::get('/', function () {
    return view('pages.auth.auth-login', ['type_menu' => '']);
});

Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::resource('home', DashboardController::class);

    // Barang routes
    Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('barang/{kode_barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('barang/{kode_barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('barang/{kode_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');


    // Barang Masuk
    Route::get('barang_masuk', [BarangMasukController::class, 'index'])->name('barang_masuk.index');
    Route::get('barang_masuk/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');
    Route::post('barang_masuk', [BarangMasukController::class, 'store'])->name('barang_masuk.store')    ;
    Route::get('barang_masuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');
    Route::put('barang_masuk/{id}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');
    Route::delete('barang_masuk/{id}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');
    Route::get('barang_masuk/riwayat', [BarangMasukController::class, 'riwayat'])->name('barang_masuk.riwayat');

    // Barang Keluar
    Route::get('barang_keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar.index');
    Route::get('barang_keluar/create', [BarangKeluarController::class, 'create'])->name('barang_keluar.create');
    Route::post('barang_keluar', [BarangKeluarController::class, 'store'])->name('barang_keluar.store');
    Route::get('barang_keluar/{id}/edit', [BarangKeluarController::class, 'edit'])->name('barang_keluar.edit');
    Route::put('barang_keluar/{id}', [BarangKeluarController::class, 'update'])->name('barang_keluar.update');
    Route::delete('barang_keluar/{id}', [BarangKeluarController::class, 'destroy'])->name('barang_keluar.destroy');
    Route::get('barang_keluar/riwayat', [BarangKeluarController::class, 'riwayat'])->name('barang_keluar.riwayat');

    //LOG
    Route::resource('log_keluar', LogKeluarController::class);
    Route::resource('log_masuk', LogMasukController::class);
 



    // Additional Resources
    Route::resource('schedule', ScheduleController::class);
    Route::resource('gudang', GudangController::class);
    Route::resource('note', NoteController::class);
    Route::apiResource('log', LogController::class);
});

