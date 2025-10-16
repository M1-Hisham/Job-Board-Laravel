<?php

use App\Http\Controllers\api\CommentApiController;
use App\Http\Controllers\api\PostApiController;


Route::prefix("v1")->group(function () {
    Route::apiResource("posts", PostApiController::class);

    Route::apiResource("comments", CommentApiController::class);
});

