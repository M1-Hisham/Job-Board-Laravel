<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;

// ## Public Routes
// Authentication Routes
Route::get("/signup", [AuthController::class, 'showSignupForm'])->name('signup');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);

Route::middleware('test')->group(function () {
    Route::get('/job', [JobController::class, 'index']);
});

// ## Protected Routes
Route::middleware('auth')->group(function () {
    //// Route::resource('/post', PostController::class);
    // Viewer, Editor, Admin Routes Roles
    Route::middleware('role:viewer,editor,admin')->group(function () {
        Route::get('/post', [PostController::class, 'index']);
        Route::get('/post/{id}/view', [PostController::class, 'show']);
    });

    // Editor, Admin Routes Roles
    Route::middleware('role:editor,admin')->group(function () {
        Route::get('/post/create', [PostController::class, 'create']);
    });

    // Admin Routes Roles
    Route::middleware('role:admin,editor')->group(function () {
        Route::delete('post/{post}/destory', [PostController::class, 'destroy'])->name('post.destroy');
        ///this is post policy check.
        //->can('delete', 'post');
        /// OR.
        //Route::middleware('can:delete,post')->group(function () {}
    });

    ////
    Route::resource('comments', CommentController::class);
});


