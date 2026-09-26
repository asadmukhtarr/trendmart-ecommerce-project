<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/', [pagesController::class,'home'])->name('home');
Route::get('/about',[pagesController::class,'about'])->name('about');
Route::get('/contact',[pagesController::class,'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
