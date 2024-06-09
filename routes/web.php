<?php

use App\Http\Controllers\GudangController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\DashboardController;
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


    //Route::resource('user', UserController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('gudang', GudangController::class);

    //Notes
    Route::resource('note', NoteController::class);

});
