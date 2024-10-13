<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Comment as ResourcesComment;

/**
 * کلاس Post برای تبدیل پست‌ها به فرمت JSON.
 *
 * این کلاس مسئول تبدیل یک پست به آرایه‌ای مناسب برای پاسخ‌های API است و شامل اطلاعات مربوط به کامنت‌ها نیز می‌باشد.
 */
class Post extends JsonResource
{
    /**
     * تبدیل منبع به آرایه.
     *
     * @param \Illuminate\Http\Request $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            // 'comments' => ResourcesComment::collection($this->whenLoaded('comments'))
            'comments' =>
            $this->when(
                $request->get('include') == 'comments',
                ResourcesComment::collection($this->comments)
            )
        ];
    }
}
