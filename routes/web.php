<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return redirect()->route('user.me');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // admin section
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/works', [AdminController::class, 'project'])->name('admin.project');
    Route::get('/admin/mails', [AdminController::class, 'mail'])->name('admin.mail');

    // project section
    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('project.list');
    Route::get('/admin/project/create', [ProjectController::class, 'create'])->name('project.create');

    // blog section
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blog.list');

});


// for guest
Route::get('/me', [UserController::class, 'me'])->name('user.me');
Route::get('/works', [UserController::class, 'work'])->name('user.works');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');

// download the cvfile
Route::get('/download', [UserController::class, 'download'])->name('download.cv');
// check user
Route::post('/user/check', [UserController::class, 'check'])->name('user.check');

