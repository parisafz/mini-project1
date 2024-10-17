<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * کلاس UserCollection برای جمع‌آوری و تبدیل کاربران به فرمت JSON.
 *
 * این کلاس مسئول تبدیل مجموعه‌ای از کاربران به آرایه‌ای مناسب برای پاسخ‌های API است.
 */
class UserCollection extends ResourceCollection
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
