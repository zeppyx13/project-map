<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteController;

//Route Untuk menampilkan halaman
Route::get('/dashboard', function () {
    return view('index');
})->name('index')->middleware('auth');
//Route login,regis,logout
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'auth']);
Route::post('/Register', [RegisterController::class, 'store']);
Route::get('/Register', [RegisterController::class, 'index']);
Route::post('logout', [SocialiteController::class, 'logout'])->middleware(['auth'])->name('logout');
//Route Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])->middleware(['guest'])->name('redirect');
Route::get('login/google/callback', [SocialiteController::class, 'callback'])->middleware(['guest'])->name('callback');
