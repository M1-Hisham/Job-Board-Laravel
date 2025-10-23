<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CommentApiController;
use App\Http\Controllers\api\PostApiController;
use Illuminate\Validation\Rules\Can;

// API Routes V1
Route::prefix("v1")->group(function () {

    /// Authentication routes
    Route::prefix("auth")->group(function () {
        Route::post("login", [AuthController::class, "login"]);
        // Protected routes
        Route::middleware("auth:api")->group(function () {
            Route::get("profile", [AuthController::class, "profile"]);
            Route::post("refresh", [AuthController::class, "refresh"]);
            Route::post("logout", [AuthController::class, "logout"]);
        });
    });

    /// Protected resource routes
    // role viewer , role editor , role admin
    Route::middleware("auth:api")->group(function () {
        /// Viewer, Editor and Admin only 
        Route::middleware("role:viewer,editor,admin")->group(function () {
            Route::get("posts", [PostApiController::class, "index"]);
            Route::get("posts/{id}", [PostApiController::class, "show"]);
        });

        /// Editor and Admin only
        Route::middleware("role:editor,admin")->group(function () {
            Route::post("posts/create", [PostApiController::class, "store"]);
            Route::patch("posts/{post}/update", [PostApiController::class, "update"])->can("update", "post");
            Route::delete("posts/{post}/delete", [PostApiController::class, "destroy"])->can("delete", "post");
        });

        /// Admin only
        Route::middleware("role:admin")->group(function () {
            Route::delete("posts/{id}/delete", [PostApiController::class, "destroy"]);
        });
    });

    Route::apiResource("comments", CommentApiController::class)->middleware("auth:api");
});

