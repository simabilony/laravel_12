<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');
//Route::get('/second', function () {
//    return view('second');
    // More simple syntax:
    Route::view('/second', 'second');
//});
