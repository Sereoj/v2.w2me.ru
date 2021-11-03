<?php

use App\Http\Controllers\Api\CategoriesListController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WallpaperListController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'store']);
Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'create']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::patch('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::get('/wallpapers', [WallpaperListController::class, 'getAllWallpapers']);
Route::get('/wallpapers/load/{id}', [WallpaperListController::class, 'getLoadWallpapers']);
Route::get('/wallpapers/{id}', [WallpaperListController::class, 'getOneWallpaper']);

Route::middleware('auth:api')->group(function (){
    //todo
});


Route::get('/wallpapers/add', function ()
{
    return "auth";
});
Route::post('/wallpapers/add', [WallpaperListController::class, 'SetOneWallpaper']);


Route::get('/categories', [CategoriesListController::class, 'getCategories']);
Route::get('/categories/{id}', [CategoriesListController::class, 'getCategory']);
