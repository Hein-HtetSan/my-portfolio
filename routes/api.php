<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// imported controller
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\MailController;
use App\Http\Controllers\API\LangaugeController;


    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

    Route::get('get/projects', [ProjectController::class, 'get']);
    Route::get('get/mails', [MailController::class, 'get']);
    Route::get('get/users', [AuthController::class, 'get_users']);
    Route::get('get/langs', [LangaugeController::class, 'get']);

    Route::post('store/project', [ProjectController::class, 'store']);
    Route::post('/upload', [ProjectController::class, 'handleUpload']);


