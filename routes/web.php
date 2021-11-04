<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UI\EditProfileController;
use App\Http\Controllers\UI\ProfileController;
use App\Http\Controllers\UI\ThumbnailsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
/**
 * index w2me.ru
 * index->login
 * index->register
 * index->reset
 * index->pages w2me.ru/pages/
 * index->catalog->page w2me.ru/catalog/name
 * index->catalog->new->page w2me.ru/catalog/new/name
 * index->category->catalog w2me.ru/category/catalog
 */

Route::get('/',[ThumbnailsController::class, 'index'])->name('index');

Route::name('images.')->group(
    function ()
    {
        Route::get('/catalog/new',[ThumbnailsController::class, 'index_new'])->name('new');
        Route::get('/catalog/popular',[ThumbnailsController::class, 'index_popular'])->name('popular');
        Route::get('/catalog/wait',[ThumbnailsController::class, 'index_wait'])->name('wait');

        Route::get('/catalog/{slug}',[ThumbnailsController::class, 'index_simple'])->name('simple');

        Route::middleware('auth:web')->group(function (){
            //gets
            Route::get('/favorite',[ThumbnailsController::class, 'index_favorite'])->name('favorite');
            Route::get('/install',[ThumbnailsController::class, 'index_install'])->name('install');
            Route::get('/load',[ThumbnailsController::class, 'index_load'])->name('load');

            //post
            Route::post('/load',[ThumbnailsController::class, 'store_load']);
        });
    }
);

Route::name('user.')->group(
    function ()
    {
        Route::get('/register', [RegisterController::class,'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'store']);

        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'store']);

        Route::middleware('auth:web')->group(function (){
            Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
            Route::post('/profile', [ProfileController::class, 'store']);

            Route::get('/profile/edit', [EditProfileController::class, 'index'])->name('edit');
            Route::post('/profile/edit', [EditProfileController::class, 'store']);

            Route::get('/logout',[ProfileController::class, 'logout'])->name('logout');
        });


    }
);

