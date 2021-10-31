<?php

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

Route::get('/',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index'])->name('index');

Route::name('images.')->group(
    function ()
    {
        Route::get('/new',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_new'])->name('new');
        Route::get('/popular',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_popular'])->name('popular');
        Route::get('/wait',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_wait'])->name('wait');

        Route::middleware('auth')->get('/favorite',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_favorite'])->name('favorite');
        Route::middleware('auth')->get('/install',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_install'])->name('install');
        Route::middleware('auth')->get('/load',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_load'])->name('load');

        Route::get('/images/{id}',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_simple'])->name('simple');
    }
);



Route::name('user.')->group(
    function ()
    {
        Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class,'index_register'])->name('register');
        Route::post('/register', [\App\Http\Controllers\Auth\AuthController::class, 'create']);

        Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('login');
        Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'store']);

        Route::middleware('auth')->get('/profile', [\App\Http\Controllers\Auth\AuthController::class, 'index_profile'])->name('profile');
        Route::middleware('auth')->get('/dashboard', [\App\Http\Controllers\Auth\AuthController::class, 'index_profile'])->name('dashboard');

        Route::middleware('auth')->get('/logout',[\App\Http\Controllers\UI\ThumbnailsController::class, 'index_logout'])->name('logout');

    }
);

