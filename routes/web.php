<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
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

Route::redirect('/', '/login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    // Rute yang hanya dapat diakses oleh admin
    Route::get('/siswa', [SiswaController::class,'index'])->name('siswa.index');

});
