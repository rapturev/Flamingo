<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PointerController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WalkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed.index');

Route::resource('users', UserController::class);
Route::resource('blogs', BlogController::class);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);

Route::get('/set-like', [LikeController::class, 'setLike'])->name('likes.setlike');
Route::get('/unset-like', [LikeController::class, 'unsetLike'])->name('likes.unsetlike');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

Route::resource('walks', WalkController::class);
Route::resource('pointers', PointerController::class);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks.index');
Route::get('/mark', [BookmarkController::class, 'mark'])->name('bookmarks.mark');
Route::get('/unmark', [BookmarkController::class, 'unmark'])->name('bookmarks.unmark');



