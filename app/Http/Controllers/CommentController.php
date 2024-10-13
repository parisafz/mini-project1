<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

/**
 * کنترلر CommentController برای مدیریت کامنت‌ها.
 *
 * این کنترلر عملیات CRUD (ایجاد، خواندن، بروزرسانی و حذف) را برای کامنت‌ها فراهم می‌کند.
 */
class CommentController extends Controller
{
    /**
     * نمایش لیستی از کامنت‌ها.
     */
    public function index()
    {
        //
    }

    /**
     * نمایش فرم برای ایجاد یک کامنت جدید.
     */
    public function create()
    {
        //
    }

    /**
     * ذخیره یک کامنت جدید در پایگاه‌داده.
     *
     * @param \App\Http\Requests\StoreCommentRequest $request
     */
    public function store(StoreCommentRequest $request)
    {
        //
    }

    /**
     * نمایش یک کامنت مشخص.
     *
     * @param \App\Models\Comment $comment
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * نمایش فرم برای ویرایش یک کامنت مشخص.
     *
     * @param \App\Models\Comment $comment
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * بروزرسانی یک کامنت مشخص در پایگاه‌داده.
     *
     * @param \App\Http\Requests\UpdateCommentRequest $request
     * @param \App\Models\Comment $comment
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * حذف یک کامنت مشخص از پایگاه‌داده.
     *
     * @param \App\Models\Comment $comment
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
