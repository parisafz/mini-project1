<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * این کلاس برای تبدیل یک شیء Comment به آرایه‌ای از داده‌ها برای پاسخ JSON استفاده می‌شود.
 */
class Comment extends JsonResource
{
    /**
     * تبدیل شیء Comment به آرایه‌ای از داده‌ها.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return array آرایه‌ای از داده‌های مربوط به کامنت
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'post_id' => $this->post_id
        ];
    }
}
