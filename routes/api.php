<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;


Route::get('/post', [PostController::class, 'index']);
Route::post('/post/create', [PostController::class, 'create']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');


Route::get('/comments', [CommentController::class, 'index']);
Route::post('/comments/create', [CommentController::class, 'create']);
Route::delete('/comments/delete/{id}', [CommentController::class, 'destroy'])->name('comments.delete');