<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * کلاس StorePostRequest برای اعتبارسنجی درخواست‌های ذخیره‌سازی پست.
 *
 * این کلاس مسئول تأیید مجوز و تعریف قوانین اعتبارسنجی برای درخواست‌های مربوط به پست‌ها است.
 */
class StorePostRequest extends FormRequest
{
    /**
     * تعیین اینکه آیا کاربر مجاز به انجام این درخواست است یا خیر.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * دریافت قوانین اعتبارسنجی که به درخواست اعمال می‌شود.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|integer',
            'image' => 'required|image'
        ];
    }
}
