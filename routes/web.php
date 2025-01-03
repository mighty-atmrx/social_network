<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DeleteController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', IndexController::class)->name('posts');
Route::get('/create', CreateController::class)->name('post.create');
Route::post('/create', StoreController::class)->name('post.store');
Route::get('/show/{post}', ShowController::class)->name('post.show');
Route::get('/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/{post}', UpdateController::class)->name('post.update');
Route::delete('/{post}', DeleteController::class)->name('post.delete');


Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', \App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
    });
});


