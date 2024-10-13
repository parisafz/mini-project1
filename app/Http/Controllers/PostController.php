<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

/**
 * کنترلر PostController برای مدیریت پست‌ها.
 *
 * این کنترلر عملیات CRUD (ایجاد، خواندن، بروزرسانی و حذف) را برای پست‌ها فراهم می‌کند.
 */
class PostController extends Controller
{
    /**
     * نمایش لیستی از پست‌ها.
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * نمایش فرم برای ایجاد یک پست جدید.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * ذخیره یک پست جدید در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->route('post.index')->with('success', 'record created successfully');
    }

    /**
     * نمایش یک پست مشخص.
     *
     * @param \App\Models\Post $post
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * نمایش فرم برای ویرایش یک پست مشخص.
     *
     * @param \App\Models\Post $post
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * بروزرسانی یک پست مشخص در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('post.index')->with('success', 'record updated successfully');
    }

    /**
     * حذف یک پست مشخص از پایگاه‌داده.
     *
     * @param \App\Models\Post $post
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->with('success', 'record deleted successfully');
    }
}
