<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed.index');

Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/{user}', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('blogs')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/{blog}', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::prefix('posts')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/{post}', [PostController::class, 'store'])->name('posts.store');
    Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/setlike', [LikeController::class, 'setLike'])->name('likes.setlike');
Route::get('/unsetlike', [LikeController::class, 'unsetLike'])->name('likes.unsetlike');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

Route::prefix('walks')->group(function() {
    Route::get('/', [WalkController::class, 'index'])->name('walks.index');
    Route::get('/create', [WalkController::class, 'create'])->name('walks.create');
    Route::post('/{walk}', [WalkController::class, 'store'])->name('walks.store');
    Route::get('/{walk}', [WalkController::class, 'show'])->name('walks.show');
    Route::get('/{walk}/edit', [WalkController::class, 'edit'])->name('walks.edit');
    Route::put('/{walk}', [WalkController::class, 'update'])->name('walks.update');
    Route::delete('/{walk}', [WalkController::class, 'destroy'])->name('walks.destroy');
});


