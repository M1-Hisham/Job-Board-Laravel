<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);
Route::get('/about', [IndexController::class,'about']);
Route::get('/contact', [IndexController::class,'contact']);

Route::get('/job', [JobController::class,'index']);

Route::get('/post', [PostController::class,'index']);
Route::get('/post/create', [PostController::class,'create']);
Route::get('/post/{id}', [PostController::class,'show']);
Route::delete('/post/delete/{id}', [PostController::class,'destroy'])->name('post.delete');

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);