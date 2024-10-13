<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * کلاس CommentCollection برای جمع‌آوری و تبدیل کامنت‌ها به فرمت JSON.
 *
 * این کلاس مسئول تبدیل مجموعه‌ای از کامنت‌ها به آرایه‌ای مناسب برای پاسخ‌های API است.
 */
class CommentCollection extends ResourceCollection
{
    /**
     * تبدیل مجموعه منبع به آرایه.
     *
     * @param \Illuminate\Http\Request $request
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection
        ];
    }
}
