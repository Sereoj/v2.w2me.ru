<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/email/verify', function () {
    return view('auth.passwords.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::name('user.')->group(
    function ()
    {
        Route::get('/register', [AuthController::class,'index_register'])->name('register');
        Route::post('/register', [AuthController::class, 'create']);

        Route::get('/login', [AuthController::class, 'index_login'])->name('login');
        Route::post('/login', [AuthController::class, 'store']);

        Route::middleware('auth')->get('/profile', [AuthController::class, 'index_profile'])->name('profile');
        Route::middleware('auth')->post('/profile', [AuthController::class, 'store_profile']);

        Route::middleware('auth')->get('/profile/edit', [AuthController::class, 'index_edit_profile'])->name('edit');
        Route::middleware('auth')->post('/profile/edit', [AuthController::class, 'store_edit_profile']);

        Route::middleware('auth')->get('/dashboard', [AuthController::class, 'index_profile'])->name('dashboard');

        Route::middleware('auth')->get('/logout',[ThumbnailsController::class, 'index_logout'])->name('logout');

    }
);

