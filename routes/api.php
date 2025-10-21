<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CommentApiController;
use App\Http\Controllers\api\PostApiController;

// API Routes V1
Route::prefix("v1")->group(function () {
    // Authentication routes
    Route::prefix("auth")->group(function () {
        Route::post("login", [AuthController::class, "login"]);

        // Protected routes
        Route::middleware("auth:api")->group(function () {
            Route::get("profile", [AuthController::class, "profile"]);
            Route::post("refresh", [AuthController::class, "refresh"]);
            Route::post("logout", [AuthController::class, "logout"]);
        });

    });

    // Protected resource routes
    Route::apiResource("posts", PostApiController::class)->middleware("auth:api");

    Route::apiResource("comments", CommentApiController::class)->middleware("auth:api");
});

