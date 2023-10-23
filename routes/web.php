<?php

use App\Http\Controllers\DashboardController;
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

Route::view('/', 'home');
Route::view('/about', 'about')->name('about');
Route::view('/blog', 'blog')->name('blog');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');
