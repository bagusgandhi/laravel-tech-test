<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthLogoutController;



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
    return redirect('/login');
});


Route::get('/login', [AuthLoginController::class, 'showLoginForm']);
Route::post('/authenticate', [AuthLoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthLogoutController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
