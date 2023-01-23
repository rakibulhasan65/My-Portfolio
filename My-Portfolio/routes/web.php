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
use App\Http\Controllers\Backend\ProfileSettingController;
use App\Http\Controllers\Backend\TechnicalSupportController;

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
    // Technical Support
    Route::resource('support', TechnicalSupportController::class);
    // Gallery Route
    Route::group([
        'prefix' => 'gallery', 'as' => 'gallery.'
    ], function () {
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
        Route::post(
            '/gallerySave',
            [GalleryController::class, 'store']
        )->name('gallerySave');
        Route::post('/devImgDelete/{id}', [GalleryController::class, 'devImgDelete'])->name('devImgDelete');
        Route::post('/designImgDelete/{id}', [GalleryController::class, 'designImgDelete'])->name('designImgDelete');
        
    });
    Route::group([
        'prefix' => 'profiles', 'as' => 'profile.'
    ], function () {
        Route::get('/profileIndex', [ProfileSettingController::class, 'profileIndex'])->name('profileIndex');
        Route::post('/profileUpdate', [ProfileSettingController::class, 'profileUpdate'])->name('profileUpdate');
    });

});
