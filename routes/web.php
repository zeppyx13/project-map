<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// Untuk menampilkan halaman
Route::get('/dahboard', function () {
    return view('index');
})->name('index');
Route::get('/', function () {
    return view('login.login');
});
Route::post('/Register', [RegisterController::class, 'store']);
Route::get('/Register', [RegisterController::class, 'index']);
// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');
