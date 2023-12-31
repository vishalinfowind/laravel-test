<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('users', UserController::class);
    Route::get('/user', [UserController::class, 'user']);
    Route::get('/user-list', [UserController::class, 'userList']);

});

