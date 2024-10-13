<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * کلاس PostCollection برای جمع‌آوری و تبدیل پست‌ها به فرمت JSON.
 *
 * این کلاس مسئول تبدیل مجموعه‌ای از پست‌ها به آرایه‌ای مناسب برای پاسخ‌های API است.
 */
class PostCollection extends ResourceCollection
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
