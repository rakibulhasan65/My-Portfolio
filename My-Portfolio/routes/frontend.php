<?php

use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Http\Controllers\Frontend\HireMeController;
use App\Models\Frontend\ContactMail;

// Frontend view Show All Route 
Route::get('/', [WebSiteController::class, 'index'])->name('home');
// ContactMail Send Route
Route::post('/sendMessage', [ContactController::class, 'sendMessage'])->name('sendMessage');
// Hire Me Route Send
Route::get('/hireMe', [HireMeController::class, 'hireMe'])->name('hireMe');
Route::get('/orderPlaceForm', [HireMeController::class, 'orderPlaceForm'])->name('orderPlaceForm');
// About More Route
Route::get('/aboutMore{id}', [WebSiteController::class, 'aboutMore'])->name('aboutMore');
// Services More Route
Route::get('/ServicesMore{id}', [WebSiteController::class, 'ServicesMore'])->name('ServicesMore');
