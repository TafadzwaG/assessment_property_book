<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurStoryController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StoryPhotoController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('one-ui-admin.layouts.dashboard');
});

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/footers', [FooterController::class, 'index']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/story-photo', [StoryPhotoController::class, 'index']);
Route::get('/pricing', [PriceController::class, 'index']);
Route::get('/home-banner', [HomeBannerController::class, 'index']);
Route::get('/our-story', [OurStoryController::class, 'index']);


//POST ROUTES
Route::post('save_service', [ServiceController::class, 'store']);
Route::post('save_footer', [FooterController::class, 'store']);
