<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WalkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed.index');

Route::resource('users', UserController::class);
Route::resource('blogs', BlogController::class);
Route::resource('posts', PostController::class);

Route::get('/setlike', [LikeController::class, 'setLike'])->name('likes.setlike');
Route::get('/unsetlike', [LikeController::class, 'unsetLike'])->name('likes.unsetlike');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

Route::resource('walks', WalkController::class);

