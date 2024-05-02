<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
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
    Route::post('/admin/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/admin/project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/admin/project/get/{id}', [ProjectController::class, 'get'])->name('project.get');
    Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/admin/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');

    // mailing section
    Route::get('/admin/mails/all', [MailController::class, 'index'])->name('mail.list'); // inbox mail list
    Route::get('/admin/mails/send', [MailController::class, 'sendList'])->name('mail.send.list'); // sent mail list
    Route::get('/admin/mails/{id}', [MailController::class, 'get'])->name('mail.get'); // read specific mail
    Route::post('/admin/mails/{id}/send', [MailController::class, 'sendMail'])->name('mail.admin.send'); // send mail to subscriber
    Route::get('/admin/mails/destroy/{id}', [MailController::class, 'destroy'])->name('mail.destroy'); // permanent delete the mail
    Route::get('/admin/mails/star/{id}', [MailController::class, 'star'])->name('mail.star'); // star the mail

    // blog section
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blog.list');

});


// for guest
Route::get('/me', [UserController::class, 'me'])->name('user.me');
Route::get('/works', [UserController::class, 'work'])->name('user.works');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
// project
Route::get('/project/detail/{id}', [UserController::class, 'detail'])->name('project.detail');
// download the cvfile
Route::get('/download', [UserController::class, 'download'])->name('download.cv');
// mail send
Route::post('/mail/send', [UserController::class, 'sendMail'])->name('mail.send');

// check user
Route::post('/user/check', [UserController::class, 'check'])->name('user.check');

