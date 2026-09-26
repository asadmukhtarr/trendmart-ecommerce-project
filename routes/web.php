<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/', [pagesController::class,'home'])->name('home');
Route::get('/about',[pagesController::class,'about'])->name('about');
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
Route::get('/products',[pagesController::class,'products'])->name('products');
Route::get('/showproduct',[pagesController::class,'showproduct'])->name('showproduct');
Route::get('/faq',[pagesController::class,'faq'])->name('faq');
Route::get('/checkout',[pagesController::class,'checkout'])->name('checkout');
Route::get('/privacy',[pagesController::class,'privacy'])->name('privacy');
Route::get('/cart',[pagesController::class,'cart'])->name('cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
