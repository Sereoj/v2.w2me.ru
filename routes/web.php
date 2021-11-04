<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\UI\EditProfileController;
use App\Http\Controllers\UI\FavoriteThumbnailsController;
use App\Http\Controllers\UI\InstallThumbnailsController;
use App\Http\Controllers\UI\LoadThumbnailsController;
use App\Http\Controllers\UI\NewThumbnailsController;
use App\Http\Controllers\UI\PopularThumbnailsController;
use App\Http\Controllers\UI\ProfileController;
use App\Http\Controllers\UI\ThumbnailsController;
use App\Http\Controllers\UI\WaitThumbnailsController;
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
 * index->forgot-password
 * index->reset
 * index->pages w2me.ru/pages/
 * index->catalog->page w2me.ru/catalog/name
 * index->catalog->new->page w2me.ru/catalog/new/name
 * index->category->catalog w2me.ru/category/catalog
 */
Auth::routes(['verify' => true]);
Route::get('/',[ThumbnailsController::class, 'index'])->name('index');

Route::name('images.')->group(
    function ()
    {
        Route::get('/catalog/new',[NewThumbnailsController::class, 'index'])->name('new');
        Route::get('/catalog/popular',[PopularThumbnailsController::class, 'index'])->name('popular');
        Route::get('/catalog/wait',[WaitThumbnailsController::class, 'index'])->name('wait');

        Route::get('/catalog/{slug}',[ThumbnailsController::class, 'index_simple'])->name('simple');

        Route::middleware('auth:web')->group(function (){
            //gets
            Route::get('/favorite',[FavoriteThumbnailsController::class, 'index'])->name('favorite');
            Route::get('/install',[InstallThumbnailsController::class, 'index'])->name('install');
            Route::get('/load',[LoadThumbnailsController::class, 'index'])->name('load');

            //post
            Route::post('/load',[LoadThumbnailsController::class, 'store']);
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

        Route::get('/verify/{token}',[VerifyEmailController::class, 'verify'])->name('register.verify');

        Route::middleware('auth:web')->group(function (){
            Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
            Route::post('/profile', [ProfileController::class, 'store']);

            Route::get('/profile/edit', [EditProfileController::class, 'index'])->name('edit');
            Route::post('/profile/edit', [EditProfileController::class, 'store']);

            Route::get('/logout',[ProfileController::class, 'logout'])->name('logout');
        });


    }
);

