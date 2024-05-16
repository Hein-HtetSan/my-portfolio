<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Log;


use App\Models\Language;

Route::get('/', function () {
    return redirect()->route('user.me');
});


Route::middleware([
    'auth:sanctum',
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
    Route::post('/admin/project/search/', [ProjectController::class, 'search'])->name('project.search');

    // mailing section
    Route::get('/admin/mails/all', [MailController::class, 'index'])->name('mail.list'); // inbox mail list
    Route::get('/admin/mails/send', [MailController::class, 'sendList'])->name('mail.send.list'); // sent mail list
    Route::get('/admin/mails/get/{id}', [MailController::class, 'getById'])->name('mail.getById'); // read specific mail
    Route::post('/admin/mails/reply/{id}', [MailController::class, 'reply'])->name('mail.reply'); // send mail to subscriber
    Route::get('/admin/mails/destroy/{id}', [MailController::class, 'destroy'])->name('mail.destroy'); // permanent delete the mail

    Route::get('/admin/mails/star/{id}', [MailController::class, 'star'])->name('mail.star'); // star the mail
    Route::get('/admin/mails/unstar/{id}', [MailController::class, 'unstar'])->name('mail.unstar'); // unstar mail
    Route::get('/admin/mails/stared', [MailController::class, 'get_stared_mail'])->name('mail.starlist'); // list of stared mail

    Route::get('/admin/mails/archived', [MailController::class, 'get_archived_mail'])->name('mail.archived.list'); // list of archived mail
    Route::get('/admin/mails/archive/{id}', [MailController::class, 'archive'])->name('mail.archive'); // archive mail
    Route::get("/admin/mails/unarchive/{id}", [MailController::class, 'unarchive'])->name('mail.unarchive'); // unarchive mail

    Route::get('/admin/mails/trashed', [MailController::class, 'get_trashed_mail'])->name('mail.trashed.list'); // list of trashed mail
    Route::get('/admin/mails/trash/{id}', [MailController::class, 'trash'])->name('mail.trash'); // put into trash
    Route::get('/admin/mails/untrash/{id}', [MailController::class, 'untrash'])->name('mail.untrash'); // out of trash

    Route::get('/admin/profile/intro', [AdminController::class, 'intro_page'])->name('profile.intro'); // intro message edit
    Route::post('/admin/profile/intro/save', [AdminController::class, 'intro_save'])->name('profile.intro.save'); // save message edit

    Route::get('/admin/profile/contact', [AdminController::class, 'contact_page'])->name('profile.contact'); // contact page edit
    Route::post('/admin/profile/contact/save', [AdminController::class, 'contact_save'])->name('profile.contact.save'); // save contact edit

    Route::get('/admin/profile/github', [AdminController::class, 'github_page'])->name('profile.github');  // github page edit
    Route::post('/admin/profile/github/save', [AdminController::class, 'github_save'])->name('profile.github.save'); // github account store

    Route::get('/admin/profile/cv', [AdminController::class, 'cv_form'])->name('profile.cv'); // cv form
    Route::post('/admin/profile/cv/save', [AdminController::class, 'cv_save'])->name('profile.cv.save'); // save the cv form
    Route::get('/admin/profile/cv/destroy/{id}', [AdminController::class, 'cv_destroy'])->name('profile.cv.destroy'); // remove cv form

    // blog section
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blog.list');

});

Route::group(['scheme' => 'https'], function() {
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
});



// login
Route::post('/user/login', [AuthController::class, 'login'])->name('user.login');




