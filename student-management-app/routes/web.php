<?php

use Illuminate\Support\Facades\Route;
/*
web routes

=== core section ===
/dashboard
/my profile
/attendance 
/subjects/classes
/exams
/progress
/fees and payments
/progress
/noticeboard
/settings
/message
*/ 

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
