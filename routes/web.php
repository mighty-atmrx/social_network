<?php

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DeleteController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', IndexController::class)->name('posts');
Route::get('/create', CreateController::class)->name('post.create');
Route::post('/create', StoreController::class)->name('post.store');
Route::get('/show/{post}', ShowController::class)->name('post.show');
Route::get('/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/{post}', UpdateController::class)->name('post.update');
Route::delete('/{post}', DeleteController::class)->name('post.delete');

