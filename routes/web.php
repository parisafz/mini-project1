<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * تعریف مسیرهای وب برای برنامه.
 */

// مسیر برای نمایش صفحه خوش‌آمدگویی
Route::get('/', function () {
    return view('welcome'); // بازگشت به نمای خوش‌آمدگویی
});

// تعریف مسیرهای منبع برای مدل پست
Route::resource('post', PostController::class);

Route::resource('user', UserController::class);
