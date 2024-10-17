<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * این کلاس برای تبدیل یک شیء User به آرایه‌ای از داده‌ها برای پاسخ JSON استفاده می‌شود.
 */
class User extends JsonResource
{
    /**
     * تبدیل شیء User به آرایه‌ای از داده‌ها.
     *
     * @param \Illuminate\Http\Request $request درخواست ورودی
     * @return array آرایه‌ای از داده‌های مربوط به کاربر
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
