<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * کنترلر ApiUserController برای مدیریت کاربران.
 *
 * این کنترلر عملیات CRUD (ایجاد، خواندن، بروزرسانی و حذف) را برای کاربران فراهم می‌کند.
 */
class ApiUserController extends Controller
{
    /**
     * نمایش لیستی از کاربران.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * ذخیره یک کاربر جدید در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return \App\Models\User
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    /**
     * نمایش یک کاربر مشخص.
     *
     * @param string $id شناسه کاربر
     * @return \App\Models\User
     */
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    /**
     * بروزرسانی یک کاربر مشخص در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @param string $id شناسه کاربر
     * @return \App\Models\User
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * حذف یک کاربر مشخص از پایگاه‌داده.
     *
     * @param string $id شناسه کاربر
     * @return void
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}
