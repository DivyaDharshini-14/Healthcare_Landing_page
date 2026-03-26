<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'servicesPage'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::post('/book', [HomeController::class, 'book'])->name('book');

