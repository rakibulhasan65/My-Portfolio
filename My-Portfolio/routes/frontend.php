<?php

use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Models\Frontend\ContactMail;

// Frontend view Show All Route 
Route::get('/', [WebSiteController::class, 'index'])->name('home');
// ContactMail Send Route
Route::post('/sendMessage', [ContactController::class, 'sendMessage'])->name('sendMessage');
// Hire Me Route Send
Route::get('/hireMe', [WebSiteController::class, 'hireMe'])->name('hireMe');
