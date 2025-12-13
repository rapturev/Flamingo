<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedController::class, 'index'])->name('feed.index');

Route::prefix('blogs')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/{blog}', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/{blog}/edit' [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/{blog}', [BlogController::class, 'destroy'])->('blogs.destroy');
})
