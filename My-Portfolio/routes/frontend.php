<?php

use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebSiteController;


// Frontend view Show All Route 
Route::get('/', [WebSiteController::class, 'index'])->name('home');
// ContactMail Send Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/sendMessage', [ContactController::class, 'sendMessage'])->name('sendMessage');