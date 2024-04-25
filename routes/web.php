<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// for guest
Route::get('/me', [UserController::class, 'me'])->name('user.me');
Route::get('/works', [UserController::class, 'work'])->name('user.works');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
