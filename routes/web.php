<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page1AboutController;
use App\Http\Controllers\Page2ResumeController;
use App\Http\Controllers\Page3ContactController;
use App\Http\Controllers\EmailsController;

Route::get('/about', [Page1AboutController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/resume', [Page2ResumeController::class, 'index']);

Route::get('/contact', [Page3ContactController::class, 'index']);

Route::post('/send-mail', [Page3ContactController::class, 'sendmail'])->name('send-mail');

Route::get('/posts', [EmailsController::class, 'index']); 

Route::get('/resumeinfo', [Page3ContactController::class, 'page']);

Route::post('/thankyou', [Page3ContactController::class, 'resumeinfo'])->name('resumeinfo');

Route::post('/mailconfirmed', [Page3ContactController::class, 'contact'])->name('contact');