<?php

use App\Http\Controllers\api\ApiCommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiPostController;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

/**
 * تعریف مسیرهای API برای برنامه.
 */

// مسیر برای دریافت اطلاعات کاربر احراز هویت شده
Route::get('/user', function (Request $request) {
    return $request->user(); // بازگشت اطلاعات کاربر
})->middleware('auth:sanctum'); // استفاده از middleware احراز هویت Sanctum

// گروه‌بندی مسیرها تحت فضای نام Api
Route::namespace('App\Http\Controllers\Api')->group(function () {
    // تعریف مسیرهای API برای مدل پست
    Route::apiResource('/posts', ApiPostController::class);
});

// گروه‌بندی مسیرها تحت فضای نام Api
Route::namespace('App\Http\Controllers\Api')->group(function () {
    // تعریف مسیرهای API برای مدل کامنت
    Route::apiResource('/comments', 'ApiCommentController');
});

/**
 * تعریف مسیر fallback برای مدیریت درخواست‌های نامعتبر.
 *
 * این مسیر زمانی اجرا می‌شود که هیچ‌یک از مسیرهای تعریف‌شده با درخواست کاربر مطابقت نداشته باشد.
 */
Route::fallback(function () {
    return response()->json(
        ['message' => 'Route not found!'],
        404
    );
});

/**
 * تعریف مسیر ورود کاربر.
 *
 * این مسیر برای احراز هویت کاربر و تولید توکن API استفاده می‌شود.
 */
Route::post('login', function (Request $request) {
    // $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required',
    // ]);

    if (Auth::attempt([
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ])) {
        $user = Auth::user();
        $user->api_token = Str::random(50);
        $user->save();
        return $user;
    }

    return response()->json([
        'error' => 'unauthentication user'
    ], 401);
});

/**
 * تعریف مسیر خروج کاربر.
 *
 * این مسیر برای خروج کاربر استفاده می‌شود.
 */
Route::middleware('auth:api')->post('logout', function (Request $request) {
    if (Auth::user()) {
        $user = Auth::user();
        $user->api_token = null;
        $user->save();
        return response([
            'message' => 'thank you for use this application!'
        ]);
    }

    return response()->json([
        'error' => 'unable to logout user'
    ], 401);
});
