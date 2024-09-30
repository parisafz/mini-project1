<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert/post', [PostController::class, 'index']);

Route::get('/insert/user', [UserController::class, 'index']);
