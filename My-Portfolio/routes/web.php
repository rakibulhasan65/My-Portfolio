<?php

use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\SkillsController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\GalleryController;

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
    // About Route
    Route::resource('about', AboutController::class);
    // Education Route
    Route::resource('educations', EducationController::class);
    // Experience Route
    Route::resource('experiences', ExperienceController::class);
    // Skills Route
    Route::resource('skills', SkillsController::class);
    // Services Route
    Route::resource('services', ServicesController::class);
    // Gallery Route
    Route::group([
        'prefix' => 'gallery', 'as' => 'gallery.'
    ], function () {
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
        Route::post(
            '/gallerySave',
            [GalleryController::class, 'store']
        )->name('gallerySave');
        Route::get('/galleryImageDelete', [GalleryController::class, 'galleryImageDelete'])->name('galleryImageDelete');
    });

});
