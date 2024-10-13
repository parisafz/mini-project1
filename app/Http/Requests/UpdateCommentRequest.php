<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * کلاس UpdateCommentRequest برای اعتبارسنجی درخواست‌های بروزرسانی کامنت.
 *
 * این کلاس مسئول تأیید مجوز و تعریف قوانین اعتبارسنجی برای درخواست‌های مربوط به بروزرسانی کامنت‌ها است.
 */
class UpdateCommentRequest extends FormRequest
{
    /**
     * تعیین اینکه آیا کاربر مجاز به انجام این درخواست است یا خیر.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * دریافت قوانین اعتبارسنجی که به درخواست اعمال می‌شود.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
