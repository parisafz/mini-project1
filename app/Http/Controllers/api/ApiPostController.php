<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post as ResourcesPost;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

/**
 * کنترلر ApiPostController برای مدیریت پست‌ها.
 *
 * این کنترلر عملیات CRUD (ایجاد، خواندن، بروزرسانی و حذف) را برای پست‌ها فراهم می‌کند.
 */
class ApiPostController extends Controller
{
    /**
     * نمایش لیستی از پست‌ها.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        // return Post::all();

        // return Post::paginate(10);


        // $sortColumn = $request->input('sort', 'id');
        // $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
        // $sortColumn = ltrim($sortColumn, '-');
        // return Post::orderBy($sortColumn, $sortDirection)->paginate(5);


        // return new ResourcesPost(Post::find(7));

        // return Post::find(7);

        return new PostCollection(Post::with('comments')->get());

        // return new PostCollection(Post::all());
    }

    /**
     * ذخیره یک پست جدید در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return \App\Models\Post
     */
    public function store(Request $request)
    {
        return Post::create([
            'title' => 'api',
            'body' => 'api text',
            'user_id' => 5
        ]);
    }

    /**
     * نمایش یک پست مشخص.
     *
     * @param string $id شناسه پست
     * @return \App\Models\Post
     */
    public function show(string $id)
    {
        return Post::findOrFail($id);
    }

    /**
     * بروزرسانی یک پست مشخص در پایگاه‌داده.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @param string $id شناسه پست
     * @return \App\Models\Post
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * حذف یک پست مشخص از پایگاه‌داده.
     *
     * @param string $id شناسه پست
     * @return void
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
    }
}
