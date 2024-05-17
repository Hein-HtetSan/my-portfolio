<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// imported controller
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\MailController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('auth/login', [AuthController::class, 'login']);
Route::get('get/projects', [ProjectController::class, 'get']);
Route::get('get/mails', [MailController::class, 'get']);
Route::get('get/users', [AuthController::class, 'get_users']);
