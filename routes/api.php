<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'store']);
Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class, 'index']);
Route::post('/register', [\App\Http\Controllers\Auth\AuthController::class, 'create']);


Route::get('/wallpapers', [\App\Http\Controllers\Api\WallpaperListController::class, 'getAllWallpapers']);
Route::get('/wallpapers/load/{id}', [\App\Http\Controllers\Api\WallpaperListController::class, 'getLoadWallpapers']);
Route::get('/wallpapers/{id}', [\App\Http\Controllers\Api\WallpaperListController::class, 'getOneWallpaper']);

Route::get('/categories', [\App\Http\Controllers\Api\CategoriesListController::class, 'getCategories']);
Route::get('/categories/{id}', [\App\Http\Controllers\Api\CategoriesListController::class, 'getCategory']);
