<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/third-api', [UserController::class, 'thirdPartyApi']);

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('users', UserController::class);
    Route::get('/user', [UserController::class, 'user']);

});

