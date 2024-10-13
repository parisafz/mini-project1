<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Comment as ResourcesComment;
use App\Http\Resources\CommentCollection;
use Illuminate\Http\Request;
use App\Models\Comment;

/**
 * کنترلر ApiCommentController برای مدیریت کامنت‌ها.
 *
 * این کنترلر عملیات CRUD (ایجاد، خواندن، بروزرسانی و حذف) را برای کامنت‌ها فراهم می‌کند.
 */
class ApiCommentController extends Controller
{
    /**
     * نمایش لیستی از کامنت‌ها.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        // return Comment::all();

        // return new ResourcesComment(Comment::findOrFail(1));

        return new CommentCollection(Comment::all());
    }

    /**
     * ذخیره یک کامنت جدید در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return \App\Models\Comment
     */
    public function store(Request $request)
    {
        return Comment::create(['comment' => 'good', 'post_id' => 6]);
    }

    /**
     * نمایش یک کامنت مشخص.
     *
     * @param string $id شناسه کامنت
     * @return \App\Models\Comment
     */
    public function show(string $id)
    {
        return Comment::findOrFail($id);
    }

    /**
     * بروزرسانی یک کامنت مشخص در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @param string $id شناسه کامنت
     * @return \App\Models\Comment
     */
    public function update(Request $request, string $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->update($request->only(['comment' => 'new comment']));
    }

    /**
     * حذف یک کامنت مشخص از پایگاه‌داده.
     *
     * @param string $id شناسه کامنت
     * @return void
     */
    public function destroy(string $id)
    {

        Comment::findOrFail($id)->delete();
    }
}
