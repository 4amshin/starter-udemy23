<?php

use App\Http\Controllers\DemoFileUploadController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get('/demo-file-upload', [DemoFileUploadController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home');

    Route::get('change-profile', function () {
        return view('dashboard.profile');
    })->name('profile');

    Route::resource('user', UserController::class);

    // Route::get('user-list', function() {
    //     return view('user.index');
    // })->name('user-list');
});
