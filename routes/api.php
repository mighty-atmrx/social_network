<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Post\CreateController;
use App\Http\Controllers\API\Post\IndexController;
use App\Http\Controllers\API\Post\ShowController;
use App\Http\Controllers\API\Post\StoreController;
use App\Http\Controllers\API\Post\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->middleware('api')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::namespace('App\Http\Controllers\API\Post')->middleware('jwt.auth')->group(function(){
    Route::get('/posts', IndexController::class);
    Route::get('/posts/{post}', ShowController::class);
    Route::get('/posts/create', CreateController::class);
    Route::post('/posts', StoreController::class);
    Route::patch('/posts/{post}', UpdateController::class);
});
