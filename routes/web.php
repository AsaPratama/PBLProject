<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

use App\Models\Gudang;
use App\Models\Schedule;
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

    /*Route::get('home', function () {
        return view('pages.app.dashboard', ['type_menu' => '']);
    })->name('home');*/


    //Dashboard
    Route::resource('home', DashboardController::class);

    //barang
    Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('barang/{kode_barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('barang/{kode_barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('barang/{kode_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

    //barang_masuk
    Route::get('barang_masuk', [BarangMasukController::class, 'index'])->name('barang_masuk.index');
    Route::get('barang_masuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');
    Route::delete('barang_masuk/{id}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');
    Route::get('barang_masuk/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');
    Route::post('barang_masuk', [BarangMasukController::class, 'store'])->name('barang_masuk.store');
    Route::get('barang_masuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');
    Route::put('barang_masuk/{id}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');
    Route::get('barang_masuk/riwayat', [BarangMasukController::class, 'riwayat'])->name('barang_masuk.riwayat');

    //barang_keluar
    Route::get('barang_keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar.index');
    Route::get('barang_keluar/create', [BarangKeluarController::class, 'create'])->name('barang_keluar.create');
    Route::post('barang_keluar', [BarangKeluarController::class, 'store'])->name('barang_keluar.store');
    Route::get('barang_keluar/{id}/edit', [BarangKeluarController::class, 'edit'])->name('barang_keluar.edit');
    Route::put('barang_keluar/{id}', [BarangKeluarController::class, 'update'])->name('barang_keluar.update');
    Route::delete('barang_keluar/{id}', [BarangKeluarController::class, 'destroy'])->name('barang_keluar.destroy');
    Route::get('barang_keluar/riwayat', [BarangKeluarController::class, 'riwayat'])->name('barang_keluar.riwayat');



    //Route::resource('user', UserController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('gudang', GudangController::class);
    Route::apiResource('barang', BarangController::class);
    Route::apiResource('log', LogController::class);
    Route::apiResource('barang_masuk', BarangMasukController::class);

    //Notes
    Route::resource('note', NoteController::class);

});
