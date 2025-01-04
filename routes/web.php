<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DeleteController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', IndexController::class)->name('post.index');
Route::get('/create', CreateController::class)->name('post.create');
Route::post('/create', StoreController::class)->name('post.store');
Route::get('/show/{post}', ShowController::class)->name('post.show');
Route::get('/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/{post}', UpdateController::class)->name('post.update');
Route::delete('/{post}', DeleteController::class)->name('post.delete');


Route::middleware([AdminPanelMiddleware::class])->prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/post', \App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
    Route::get('/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
    Route::post('/create', \App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
    Route::get('/show/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
    Route::get('/{post}/edit', \App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
    Route::patch('/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
    Route::delete('/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');
});




