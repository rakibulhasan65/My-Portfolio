<?php

use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Frontend view Show All Route 
Route::get('/', [WebSiteController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Backend view Show All Route 
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
    // Banners Route 
    Route::resource('banners', BannerController::class);

});
